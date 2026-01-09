# Architecture Documentation

## Technology Stack

- **PHP**: 8.5+
- **Framework**: Laravel 12
- **Database**: PostgreSQL 15+
- **Cache/Queue**: Redis 7+
- **Architecture**: Clean Architecture + DDD + CQRS

---

## Project Structure

```
src/
├── Domain/                              # Pure PHP - No Framework
│   ├── Monitoring/                      # BC: Trap & Gateway Monitoring
│   │   ├── Entities/                    # Trap, Gateway, TrapEvent (pure PHP)
│   │   ├── ValueObjects/                # Location, BatteryLevel, SignalStrength, HardwareId
│   │   ├── Repositories/                # Interfaces ONLY
│   │   ├── Services/                    # Domain services
│   │   ├── Events/                      # TrapTriggered, LowBatteryDetected
│   │   ├── Enums/                       # TrapType, TrapStatus, GatewayStatus
│   │   └── Specifications/              # Business rules
│   ├── Analytics/                       # BC: Analytics & Reporting
│   │   ├── Entities/, ValueObjects/, Repositories/, Services/
│   └── Notification/                    # BC: Alerts & Notifications
│       ├── Entities/, ValueObjects/, Services/
│
├── Application/                         # Use Cases & Orchestration
│   ├── Monitoring/
│   │   ├── UseCases/                    # RegisterTrapEventUseCase (execute())
│   │   ├── DTOs/                        # TrapEventDTO (readonly, fromRequest())
│   │   └── Queries/                     # GetTrapQuery (execute())
│   ├── Analytics/
│   │   ├── UseCases/, Queries/
│   ├── Http/
│   │   ├── Controllers/Api/V1/          # Inject UseCases, return Resources
│   │   ├── Requests/                    # Validation only
│   │   ├── Resources/                   # JSON transformation
│   │   └── Middleware/                  # ValidateGatewaySignature
│   ├── Listeners/                       # Application listeners (ShouldQueue)
│   └── Console/Commands/
│
└── Infrastructure/                      # Framework & External
    ├── Persistence/
    │   ├── Eloquent/
    │   │   ├── Models/                  # EloquentTrap, EloquentGateway
    │   │   └── Mappers/                 # TrapMapper (toDomain, toEloquent)
    │   └── Repositories/                # EloquentTrapRepository (implements interface)
    ├── Services/                        # External APIs
    └── Providers/                       # DI bindings
```

---

## Architectural Patterns

### Domain-Driven Design (DDD)

The project follows DDD principles with clear separation between:

#### 1. Domain Entities
- Pure PHP classes without framework dependencies
- Use `final class` with private properties
- Factory methods: `Trap::create()`, `Trap::fromPrimitives()`
- Business logic encapsulated: `$trap->trigger()`, `$trap->isLowBattery()`
- Utilize ValueObjects for complex attributes
- Use Enums for status/type fields

#### 2. Value Objects
- Immutable (`readonly` or no setters)
- Self-validating in constructor
- Provide value access via `value()` method
- Include business logic methods (e.g., `isLow()`)

#### 3. Repository Pattern
**Interfaces (Domain Layer):**
- Return Domain Entities, not Eloquent models
- Accept Domain Entities as parameters
- Define methods: `save(Trap)`, `findById(string)`, `nextIdentity()`

**Implementations (Infrastructure Layer):**
- Implement Domain interfaces
- Use Eloquent models + Mappers
- Eager load relationships for performance

#### 4. Mappers
Convert between Domain and Infrastructure layers:
- `toDomain(EloquentTrap): Trap` - Eloquent → Entity
- `toEloquent(Trap): EloquentTrap` - Entity → Eloquent
- Handle primitive ↔ ValueObject conversions

### Clean Architecture

#### Domain Layer (Core Business Logic)
- Framework-independent
- Contains Entities, ValueObjects, Repository Interfaces
- No dependencies on outer layers

#### Application Layer (Use Cases)
- Orchestrates business flows
- Contains UseCases, DTOs, Queries
- Depends on Domain, not Infrastructure

#### Infrastructure Layer (Technical Details)
- Framework implementation (Laravel)
- Database (Eloquent), External APIs
- Implements Domain interfaces

### CQRS (Command Query Responsibility Segregation)

#### Commands (Write Operations)
- Implemented as **UseCases**
- Single `execute()` method
- Use `DB::transaction()` for data integrity
- Dispatch Domain Events
- Return Entity or DTO

#### Queries (Read Operations)
- Separate query classes
- Single `execute()` method
- Read-only operations
- Can bypass repositories for optimization
- Return DTOs or arrays

---

## Core Components

### UseCases (Application Layer)
```php
final class RegisterTrapEventUseCase
{
    public function execute(TrapEventDTO $dto): TrapEvent
    {
        return DB::transaction(function () use ($dto) {
            // Business logic
            // Save entities
            // Dispatch events
        });
    }
}
```

**Rules:**
- Single `execute()` or `handle()` method
- Inject repository interfaces
- Accept DTOs as parameters
- Wrap writes in `DB::transaction()`
- Dispatch Domain Events after success

### DTOs (Data Transfer Objects)
```php
readonly class TrapEventDTO
{
    public function __construct(
        public string $trapId,
        public int $timestamp,
        public array $metadata,
    ) {}

    public static function fromRequest(RegisterTrapEventRequest $request): self
    {
        return new self(
            trapId: $request->input('trap_id'),
            timestamp: $request->input('timestamp'),
            metadata: $request->input('metadata', []),
        );
    }
}
```

**Rules:**
- `readonly class`
- Constructor property promotion
- Static factory method `fromRequest()`
- No validation logic

### Controllers
```php
final class TrapEventController
{
    public function __construct(
        private RegisterTrapEventUseCase $registerTrapEvent,
    ) {}

    public function store(RegisterTrapEventRequest $request): JsonResponse
    {
        $dto = TrapEventDTO::fromRequest($request);
        $event = $this->registerTrapEvent->execute($dto);

        return TrapEventResource::make($event)
            ->response()
            ->setStatusCode(201);
    }
}
```

**Rules:**
- Inject UseCases/Queries (NOT repositories)
- Type-hint FormRequests for validation
- Return API Resources
- No business logic

### Eloquent Models (Infrastructure)
```php
final class EloquentTrap extends Model
{
    use HasUuids, SoftDeletes;

    protected $table = 'traps';

    protected $casts = [
        'status' => TrapStatus::class,
        'type' => TrapType::class,
        'location' => 'array',
    ];
}
```

**Naming Convention:** Prefix with `Eloquent` (e.g., `EloquentTrap`, `EloquentGateway`)

---

## Database Schema

### Tables

**traps**
- `id` (uuid, PK)
- `hardware_id` (string, unique)
- `gateway_id` (uuid, FK)
- `name` (string)
- `type` (enum: rat, mouse, insect)
- `status` (enum: active, inactive, maintenance, faulty)
- `location` (jsonb)
- `total_catches` (integer)
- `battery_level` (integer, 0-100)
- `last_event_at` (timestamp, nullable)
- `created_at`, `updated_at`, `deleted_at`

**trap_events**
- `id` (uuid, PK)
- `trap_id` (uuid, FK)
- `caught_at` (timestamp)
- `battery_level` (integer)
- `rssi` (integer)
- `metadata` (jsonb)
- `created_at`

**gateways**
- `id` (uuid, PK)
- `hardware_id` (string, unique)
- `api_key` (string, unique)
- `name` (string)
- `location` (jsonb)
- `status` (enum: online, offline, maintenance)
- `last_seen_at` (timestamp, nullable)
- `created_at`, `updated_at`

### Indexes
- `traps`: gateway_id, status, type, last_event_at
- `trap_events`: trap_id, caught_at
- `gateways`: hardware_id, api_key, status

### Enums
- **TrapType**: rat, mouse, insect
- **TrapStatus**: active, inactive, maintenance, faulty
- **GatewayStatus**: online, offline, maintenance

---

## Request Flow

### Example: POST /api/v1/trap-events

1. **Middleware**: `ValidateGatewaySignature` (HMAC authentication)
2. **FormRequest**: `RegisterTrapEventRequest` (validation)
3. **Controller**: Create `TrapEventDTO` from request
4. **UseCase**: `RegisterTrapEventUseCase->execute()`
   - Find Trap entity via repository
   - Create TrapEvent entity
   - Update Trap state (trigger, increment catches)
   - Save entities via repositories
   - Dispatch `TrapTriggered` domain event
   - Clear cache
5. **Resource**: `TrapEventResource` (JSON transformation)
6. **Response**: 201 Created
7. **Async Processing**: Queued listeners handle notifications
8. **Broadcasting**: WebSocket updates to frontend

---

## Development Guidelines

### Development Order

1. **Domain Layer**
   - Define Entity
   - Create ValueObjects
   - Define Repository Interface

2. **Application Layer**
   - Create DTO with `fromRequest()`
   - Implement UseCase with `execute()`
   - Create Query for read operations

3. **Infrastructure Layer**
   - Create Eloquent Model (prefixed with `Eloquent`)
   - Implement Mapper (Entity ↔ Eloquent)
   - Implement Repository Interface

4. **HTTP Layer**
   - Create FormRequest for validation
   - Create Controller (inject UseCases)
   - Create API Resource for JSON transformation

5. **Configuration**
   - Register bindings in `DomainServiceProvider`
   - Add routes to `routes/api.php`

6. **Testing**
   - Unit tests: Entities, ValueObjects, UseCases
   - Integration tests: Repositories, Mappers
   - Feature tests: HTTP endpoints

### Dependency Injection

Register bindings in `src/Infrastructure/Providers/DomainServiceProvider.php`:

```php
public function register(): void
{
    $this->app->bind(
        TrapRepositoryInterface::class,
        EloquentTrapRepository::class
    );

    $this->app->singleton(TrapMapper::class);
}
```

### Code Standards

- **Strict Types**: Every file must start with `declare(strict_types=1);`
- **Final Classes**: Use `final` for Entities, UseCases, Controllers
- **Immutability**: Use `readonly` for DTOs and ValueObjects
- **Type Hints**: Always use strict type hints and return types
- **Static Analysis**: PHPStan Level 9

---

## Common Pitfalls

| ❌ Wrong | ✅ Correct |
|---------|----------|
| Eloquent in Domain layer | Pure PHP Entities |
| Return Eloquent from repositories | Return Domain Entities via Mappers |
| Inject repositories in Controllers | Inject UseCases |
| Multiple methods in UseCase | Single `execute()` method |
| Validation in Controller/UseCase | Use FormRequest |
| Mutable ValueObjects | `readonly` or immutable |
| Missing DB transactions | Wrap writes in `DB::transaction()` |

---

## Security

### HMAC Authentication

Gateway requests use HMAC-SHA256 signatures:

```php
$signature = hash_hmac('sha256', $request->getContent(), $gateway->apiKey());
if (!hash_equals($expectedSignature, $providedSignature)) {
    throw new UnauthorizedException();
}
```

**Critical**: Use `hash_equals()` for constant-time comparison to prevent timing attacks.

---

## Performance Considerations

- **Eager Loading**: Prevent N+1 queries in repositories
- **Caching**: Redis for read-heavy queries (1-hour TTL)
- **Queue**: All async operations via Laravel Horizon
- **CQRS**: Separate optimized read queries from write commands
- **Database Indexes**: Optimize frequent query patterns

---

## Testing Strategy

### Unit Tests
- Domain Entities business logic
- ValueObject validation
- UseCase orchestration (with mocked repositories)

### Integration Tests
- Repository implementations
- Mapper conversions
- Database constraints

### Feature Tests
- HTTP endpoints
- HMAC signature validation
- End-to-end request flows
- API Resource transformations

---

## Bounded Contexts

The system is organized into three Bounded Contexts:

1. **Monitoring**: Trap & Gateway management, event processing
2. **Analytics**: Reporting, metrics, data aggregation
3. **Notification**: Alert system, notification rules, delivery channels

Each context maintains its own domain model and can evolve independently.
