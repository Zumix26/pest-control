# IoT Pest Control Trap Monitoring System

Backend system for collecting and processing data from a network of pest control traps operating via LoRa protocol.

## 📋 Overview

The system provides:
- High reliability for IoT trap data storage
- Request authentication from gateways via HMAC
- Real-time event visualization (WebSockets)
- Device analytics and monitoring

## 🏗️ Technology Stack

- **PHP**: 8.5+
- **Framework**: Laravel 12.x
- **Database**: PostgreSQL 15+
- **Cache/Queue**: Redis 7+ (Laravel Horizon)
- **Protocol**: LoRa + HTTP
- **Architecture**: Clean Architecture + DDD + CQRS

## 🎯 Architectural Principles

### Clean Architecture + DDD
The system follows **Domain-Driven Design** with **Clean Architecture** principles:
- **Domain Layer**: Pure business logic, framework-agnostic (pure PHP)
- **Application Layer**: Use cases, orchestration, DTOs, queries
- **Infrastructure Layer**: Framework, database, external services

### Bounded Contexts
The system is divided into three **Bounded Contexts**:
1. **Monitoring**: Trap & Gateway monitoring, event processing
2. **Analytics**: Reporting, metrics, data aggregation
3. **Notification**: Alerts, notification rules, delivery channels

### CQRS (Command Query Responsibility Segregation)
- **Commands**: UseCases that modify state (write operations)
- **Queries**: Read-only operations optimized for performance

### Separation of Concerns
- **Domain Entities**: Pure PHP classes with business logic
- **Eloquent Models**: Database mapping in Infrastructure layer
- **Mappers**: Convert between Entities and Eloquent Models

### Immutability
- **ValueObjects**: Immutable, self-validating (`readonly`)
- **DTOs**: Data transfer objects (`readonly`)
- **Events**: Domain events (`readonly`)

### Single Responsibility
- **UseCases**: One `execute()` method per use case
- **Queries**: One `execute()` method per query
- **Controllers**: Thin layer, delegate to UseCases

## 📁 Project Structure

```
src/
├── Domain/                              # Pure PHP - No Framework Dependencies
│   ├── Monitoring/                      # BC: Trap & Gateway Monitoring
│   │   ├── Entities/                    # Trap, Gateway, TrapEvent (pure PHP)
│   │   ├── ValueObjects/                # Location, BatteryLevel, SignalStrength
│   │   ├── Repositories/                # Repository interfaces ONLY
│   │   ├── Services/                    # Domain services (business logic)
│   │   ├── Events/                      # TrapTriggered, LowBatteryDetected
│   │   ├── Enums/                       # TrapType, TrapStatus, GatewayStatus
│   │   └── Specifications/              # Business rules (IsOperationalTrap)
│   ├── Analytics/                       # BC: Analytics & Reporting
│   │   ├── Entities/                    # Report, Metric
│   │   ├── ValueObjects/                # Period, AggregatedData
│   │   └── Services/                    # AnalyticsService, ReportGenerator
│   └── Notification/                    # BC: Alerts & Notifications
│       ├── Entities/                    # Alert, NotificationRule
│       └── Services/                    # NotificationService
│
├── Application/                         # Use Cases & Application Logic
│   ├── Monitoring/
│   │   ├── UseCases/                    # RegisterTrapEventUseCase, CreateTrapUseCase
│   │   ├── DTOs/                        # TrapEventDTO, CreateTrapDTO (readonly)
│   │   └── Queries/                     # GetTrapQuery, GetTrapEventsQuery (CQRS)
│   ├── Analytics/
│   │   ├── UseCases/                    # GenerateReportUseCase
│   │   └── Queries/                     # GetTrapAnalyticsQuery
│   ├── Http/                            # Controllers, Requests, Resources, Middleware
│   ├── Listeners/                       # Application-level event listeners
│   └── Console/Commands/                # CLI commands
│
└── Infrastructure/                      # Framework & External Dependencies
    ├── Persistence/
    │   ├── Eloquent/
    │   │   ├── Models/                  # EloquentTrap, EloquentGateway (DB mapping)
    │   │   └── Mappers/                 # TrapMapper (Entity ↔ Eloquent)
    │   └── Repositories/                # EloquentTrapRepository (implementations)
    ├── Services/                        # External APIs (Telegram, SMTP)
    └── Providers/                       # Service providers, DI bindings
```

## 🔄 Request Lifecycle

### Command (Write Operation)
```
1. HTTP Request       → Controller receives POST /api/v1/trap-events
2. Security           → ValidateGatewaySignature middleware (HMAC validation)
3. Validation         → RegisterTrapEventRequest (FormRequest)
4. DTO Creation       → TrapEventDTO::fromRequest()
5. Use Case Execution → RegisterTrapEventUseCase->execute(dto)
   ├─ Find Trap entity
   ├─ Create TrapEvent entity
   ├─ Update Trap (business logic in entity)
   ├─ Save via repositories (use mappers)
   ├─ Dispatch domain events
   └─ Return entity
6. Resource           → TrapEventResource (JSON transformation)
7. Response           → 201 Created
8. Async Processing   → Queued listeners (notifications, analytics)
9. Broadcasting       → WebSocket to frontend
```

### Query (Read Operation)
```
1. HTTP Request       → Controller receives GET /api/v1/traps
2. Query Execution    → GetTrapsQuery->execute()
3. Repository         → Find entities (via Eloquent + Mapper)
4. Resource           → TrapResource::collection()
5. Response           → 200 OK with JSON
```

## 🚀 Functional Modules

### Monitoring (Bounded Context)
- **Trap Management**: Device registration, status tracking, battery monitoring
- **Gateway Management**: Hardware authentication, API key generation
- **Event Processing**: Trap trigger events, HMAC signature validation
- **Type Classification**: rat, mouse, insect (TrapType enum)

**Key Entities:**
- `Trap`: Main entity with business logic (trigger, isLowBattery)
- `Gateway`: Authentication entity (validateSignature)
- `TrapEvent`: Event record with metadata

**Key UseCases:**
- `RegisterTrapEventUseCase`: Process trap trigger event
- `CreateTrapUseCase`: Register new trap device
- `CreateGatewayUseCase`: Register new gateway

### Analytics (Bounded Context)
- **Metrics Calculation**: Total catches, average battery, signal strength
- **Time-Series Aggregation**: Data grouped by time periods
- **Type-Based Analytics**: Statistics by trap type
- **Report Generation**: Custom reports for different periods

**Key UseCases:**
- `GenerateReportUseCase`: Create analytics report
- `GetAnalyticsByTypeUseCase`: Aggregate by trap type

**Key Queries:**
- `GetTrapAnalyticsQuery`: Get analytics for specific trap
- `GetTrapEventsQuery`: Get event history

### Notification (Bounded Context)
- **Alert System**: Low battery, device failure notifications
- **Delivery Channels**: Telegram, Email, SMS
- **Notification Rules**: Configurable alert conditions
- **Queued Processing**: Async notification delivery

**Key Services:**
- `NotificationService`: Orchestrates notification delivery

## 📊 Database Schema

### Tables (Eloquent Models)

**traps**
```
id (uuid PK), hardware_id (unique), gateway_id (FK), name, type (enum),
status (enum), location (jsonb), total_catches (int), battery_level (int),
last_event_at (timestamp), created_at, updated_at, deleted_at
```

**trap_events**
```
id (uuid PK), trap_id (FK), caught_at (timestamp), battery_level (int),
rssi (int), metadata (jsonb), created_at
```

**gateways**
```
id (uuid PK), hardware_id (unique), api_key (unique), name,
location (jsonb), status (enum), last_seen_at (timestamp), created_at, updated_at
```

### Enums

**TrapType**: `rat`, `mouse`, `insect`
**TrapStatus**: `active`, `inactive`, `maintenance`, `faulty`
**GatewayStatus**: `online`, `offline`, `maintenance`

### Indexes
- **traps**: gateway_id, status, type, last_event_at
- **trap_events**: trap_id, caught_at
- **gateways**: hardware_id, api_key, status

## 🔐 Security

### HMAC Signature Validation
All Gateway requests are validated via `ValidateGatewaySignature` middleware:

```php
$expectedSignature = hash_hmac('sha256', $request->getContent(), $gateway->apiKey());
hash_equals($expectedSignature, $request->header('X-Gateway-Signature'));
```

**Critical**: Use `hash_equals()` for constant-time comparison (prevents timing attacks)

### Rate Limiting
60 requests/minute per Gateway

## ⚡ Performance

- **Response Time**: < 200ms (p95)
- **Caching**: Redis for read-heavy queries (TTL: 1 hour)
- **Queue**: All async operations via Redis (Horizon)
- **N+1 Prevention**: Eager loading in repositories
- **CQRS**: Separate read queries (optimized) from write commands

## 🧪 Code Quality Requirements

- **PHPStan**: Level 9 (strictest static analysis)
- **Strict Types**: `declare(strict_types=1)` in every file
- **Testing**: Pest framework (coverage >80%)
- **Code Style**: Laravel Pint (PSR-12)

## 📦 Installation

```bash
# Clone repository
git clone <repository-url>
cd pest-contol

# Install dependencies
composer install

# Environment setup
cp .env.example .env
php artisan key:generate

# Database setup
php artisan migrate
php artisan db:seed

# Start services
php artisan serve          # Development server
php artisan horizon        # Queue worker
php artisan schedule:work  # Scheduler
```

## 🧪 Testing

```bash
# Run all tests
php artisan test

# With coverage
php artisan test --coverage

# Unit tests (Entities, ValueObjects, UseCases)
php artisan test --testsuite=Unit

# Feature tests (HTTP endpoints, HMAC validation)
php artisan test --testsuite=Feature

# Static analysis
composer phpstan

# Code formatting
composer pint
```

## 📡 API Endpoints

### POST /api/v1/trap-events
Register trap event (HMAC protected)

**Headers:**
- `X-Gateway-Key`: Gateway API key
- `X-Gateway-Signature`: HMAC-SHA256 signature

**Body:**
```json
{
  "trap_id": "uuid",
  "timestamp": 1704574800,
  "metadata": {
    "battery_level": 85,
    "rssi": -65
  }
}
```

**Response:** `201 Created`

### GET /api/v1/traps
Get trap list (with filtering)

**Query params:**
- `status`: active|inactive|maintenance|faulty
- `type`: rat|mouse|insect
- `per_page`: number of records

**Response:** `200 OK` with paginated trap list

### GET /api/v1/traps/{id}
Get single trap details

**Response:** `200 OK` with trap details

### POST /api/v1/traps
Create new trap

**Body:**
```json
{
  "hardware_id": "TRAP-001",
  "gateway_id": "uuid",
  "name": "Kitchen Trap",
  "type": "rat",
  "location": {
    "latitude": 40.7128,
    "longitude": -74.0060
  }
}
```

**Response:** `201 Created`

### GET /api/v1/analytics/traps/{trapId}
Get trap analytics

**Query params:**
- `period`: 7d|30d|90d

**Response:**
```json
{
  "data": {
    "total_catches": 15,
    "avg_battery_level": 78,
    "avg_rssi": -62,
    "catches_by_day": {
      "2025-01-01": 3,
      "2025-01-02": 5
    }
  }
}
```

### GET /api/v1/analytics/by-type
Analytics aggregated by trap type

**Query params:**
- `period`: 7d|30d|90d

**Response:**
```json
{
  "data": {
    "rat": 45,
    "mouse": 23,
    "insect": 12
  }
}
```

## 📚 Additional Documentation

- **API Docs**: `/docs/api` (Swagger/OpenAPI)
- **Horizon Dashboard**: `/horizon` (Queue monitoring)
- **Telescope**: `/telescope` (dev only - debugging)

## 🤝 Development Workflow

### When Creating New Features:

1. **Domain Layer**
   - Create Entity with business logic
   - Create ValueObjects for complex attributes
   - Define Repository Interface
   - Add Domain Service if logic spans multiple entities

2. **Application Layer**
   - Create DTO with `fromRequest()` method
   - Create UseCase with single `execute()` method
   - Create Query if read-only operation

3. **Infrastructure Layer**
   - Create Eloquent Model (prefixed with `Eloquent`)
   - Create Mapper (Entity ↔ Eloquent)
   - Implement Repository Interface

4. **Application HTTP**
   - Create FormRequest for validation
   - Create Controller (inject UseCases)
   - Create Resource for JSON transformation

5. **Register Bindings**
   - Add repository bindings to `DomainServiceProvider`
   - Add event listeners to `EventServiceProvider`

6. **Routes**
   - Add routes to `routes/api.php`
   - Apply middleware if needed

7. **Tests**
   - Unit tests: Entities, ValueObjects, UseCases
   - Integration tests: Repositories, Mappers
   - Feature tests: HTTP endpoints

## 🏛️ Architecture Decisions

### Why Pure PHP Entities?
- **Framework Independence**: Domain logic doesn't depend on Laravel
- **Testability**: Easy to unit test without framework overhead
- **Portability**: Can migrate to another framework if needed
- **Business Focus**: Forces focus on business rules, not database

### Why Mappers?
- **Separation**: Domain entities != Database models
- **Flexibility**: Can change DB structure without touching Domain
- **Clarity**: Explicit conversion between layers

### Why UseCases?
- **Single Responsibility**: One use case = one business operation
- **Testability**: Easy to test with mocked repositories
- **Clarity**: Clear entry points for business logic

### Why CQRS?
- **Performance**: Optimize reads separately from writes
- **Scalability**: Scale read/write operations independently
- **Clarity**: Clear separation of concerns

## 📝 License

MIT

## 🙏 Credits

Built with:
- Laravel 12 (PHP Framework)
- PostgreSQL 15 (Database)
- Redis 7 (Cache & Queue)
- Laravel Horizon (Queue Monitoring)
- Pest (Testing Framework)
- PHPStan (Static Analysis)
