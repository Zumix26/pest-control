# IoT Trap System - AI Instructions

## Environment
- PHP 8.5 + Laravel 12
- PostgreSQL 15+, Redis 7+
- Architecture: Clean Architecture + DDD + CQRS

## File Structure (STRICT)

```
app/
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

## Core Rules

### 1. Domain Entities
- Pure PHP, NO Eloquent, NO Laravel
- `final class` with private properties
- Factory methods: `Trap::create()`, `Trap::fromPrimitives()`
- Business logic: `$trap->trigger()`, `$trap->isLowBattery()`
- Use ValueObjects for complex attributes
- Use Enums for status/type

### 2. ValueObjects
- `readonly` or immutable (no setters)
- Self-validating in constructor
- Methods: `value()`, business logic (e.g., `isLow()`)

### 3. Repository Interfaces (Domain)
- Return Domain Entities, NOT Eloquent
- Accept Domain Entities
- Methods: `save(Trap)`, `findById(string)`, `nextIdentity()`

### 4. Eloquent Models (Infrastructure)
- Prefix: `EloquentTrap`, `EloquentGateway`
- Use `HasUuids`, `SoftDeletes`
- Cast enums: `'status' => TrapStatus::class`
- Cast JSONB: `'location' => 'array'`
- Table name: `protected $table = 'traps'`

### 5. Mappers
- `toDomain(EloquentTrap): Trap` - Eloquent → Entity
- `toEloquent(Trap): EloquentTrap` - Entity → Eloquent
- Convert primitives ↔ ValueObjects

### 6. Repository Implementations
- Implement Domain interface
- Use Eloquent + Mapper
- Eager load relationships

### 7. UseCases (Application)
- **Single method**: `execute()` or `handle()`
- `final class`
- Inject repositories
- Accept DTO
- Return Entity or DTO
- **DB::transaction()** for writes
- Dispatch Domain Events

### 8. DTOs (Application)
- `readonly class`
- Constructor property promotion
- `static fromRequest(FormRequest): self`
- NO validation

### 9. Queries (CQRS Read)
- **Single method**: `execute()`
- Read-only
- Can bypass repository (direct DB)
- Return DTOs or arrays

### 10. Controllers
- Inject UseCases/Queries (NOT repositories)
- Type-hint FormRequests
- Return Resources (NOT entities)
- NO business logic

### 11. FormRequests
- Validation ONLY
- `authorize(): true` (use Middleware)
- Rules: structure and types

### 12. Middleware
- Authentication/authorization
- HMAC: `hash_hmac('sha256', payload, key)` + `hash_equals()`

### 13. Events
- `readonly` properties
- `ShouldBroadcast` for real-time

### 14. Listeners
- `ShouldQueue` for async
- Domain listeners: `Domain/Monitoring/Listeners/`
- Application listeners: `Application/Listeners/`

### 15. Domain Services
- Logic spanning multiple entities
- Inject repositories

---

## Database Schema

**traps**: id(uuid), hardware_id(unique), gateway_id(fk), name, type, status, location(jsonb), total_catches, battery_level, last_event_at, timestamps, soft_deletes

**trap_events**: id(uuid), trap_id(fk), caught_at, battery_level, rssi, metadata(jsonb), created_at

**gateways**: id(uuid), hardware_id(unique), api_key(unique), name, location(jsonb), status, last_seen_at, timestamps

**Indexes**: gateway_id, status, type, last_event_at, caught_at, hardware_id, api_key

**Enums**: TrapType(rat,mouse,insect), TrapStatus(active,inactive,maintenance,faulty), GatewayStatus(online,offline,maintenance)

---

## Critical Flow: POST /api/v1/trap-events

1. Middleware: ValidateGatewaySignature (HMAC)
2. FormRequest: RegisterTrapEventRequest
3. Controller: Create DTO
4. UseCase: RegisterTrapEventUseCase->execute()
   - Find Trap entity
   - Create TrapEvent entity
   - Update Trap (trigger, increment)
   - Save via repositories
   - Dispatch TrapTriggered event
   - Clear cache
5. Resource: TrapEventResource
6. Listeners: CheckBatteryLevel, SendNotification
7. Broadcasting: WebSocket

---

## Common Mistakes

❌ Eloquent in Domain/ → ✅ Pure PHP Entities
❌ Return Eloquent from repos → ✅ Return Entities (use Mapper)
❌ Inject repos in Controllers → ✅ Inject UseCases
❌ Multiple methods in UseCase → ✅ Single execute()
❌ Validate in Controller/UseCase → ✅ FormRequest
❌ Mutable ValueObjects → ✅ readonly/immutable
❌ Forget DB transactions → ✅ DB::transaction()

---

## Development Order

1. Domain: Entity → ValueObjects → Repository Interface
2. Application: DTO → UseCase → Query
3. Infrastructure: Eloquent Model → Mapper → Repository Impl
4. Application HTTP: FormRequest → Controller → Resource
5. Bindings: DomainServiceProvider
6. Routes: api.php
7. Tests: Unit → Integration → Feature

---

## DI Bindings (DomainServiceProvider)

```php
$this->app->bind(TrapRepositoryInterface::class, EloquentTrapRepository::class);
$this->app->singleton(TrapMapper::class);
```

---

## Strict Types

Every file: `declare(strict_types=1);`
