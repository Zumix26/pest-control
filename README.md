# IoT Pest Control Trap Monitoring System

Backend система для сбора и обработки данных с сети ловушек для вредителей, работающих по протоколу LoRa.

## Основные возможности

- Мониторинг сети IoT-ловушек в реальном времени
- HMAC-аутентификация запросов от шлюзов
- Аналитика и отчёты по уловам
- Система уведомлений (Telegram, Email, SMS)
- WebSocket для live-обновлений

## Технологии

- **Backend**: PHP 8.5+, Laravel 12.x
- **Database**: PostgreSQL 15+
- **Cache/Queue**: Redis 7+
- **Architecture**: Clean Architecture + DDD + CQRS

## Быстрый старт

```bash
# Клонировать репозиторий
git clone <repository-url>
cd pest-control

# Установить зависимости
composer install

# Настроить окружение
cp .env.example .env
php artisan key:generate

# Мигрировать БД
php artisan migrate
php artisan db:seed

# Запустить сервисы
php artisan serve          # Dev-сервер (http://localhost:8000)
php artisan horizon        # Обработчик очередей
php artisan schedule:work  # Планировщик задач
```

## Тестирование

```bash
# Все тесты
php artisan test

# С покрытием
php artisan test --coverage

# Статический анализ
composer phpstan

# Форматирование кода
composer pint
```

## API

Полная документация API доступна по адресу `/docs/api` после запуска проекта.

### Основные эндпоинты

- `POST /api/v1/trap-events` - Регистрация события от ловушки (требует HMAC)
- `GET /api/v1/traps` - Список ловушек
- `GET /api/v1/traps/{id}` - Детали ловушки
- `GET /api/v1/analytics/traps/{id}` - Аналитика по ловушке
- `GET /api/v1/analytics/by-type` - Аналитика по типам ловушек

## Архитектура

Проект следует принципам Clean Architecture и Domain-Driven Design:

```
src/
├── Domain/          # Бизнес-логика (чистый PHP)
├── Application/     # Use Cases, DTOs, Queries
└── Infrastructure/  # Laravel, DB, внешние сервисы
```

Подробнее об архитектурных решениях читайте в [ARCHITECTURE.md](docs/ARCHITECTURE.md).

## Требования к коду

- PHPStan Level 9
- `declare(strict_types=1)` везде
- Покрытие тестами >80%
- Laravel Pint (PSR-12)

## Мониторинг

- **Horizon**: `/horizon` - мониторинг очередей
- **Telescope**: `/telescope` - дебаг (только dev)

## Лицензия

MIT

