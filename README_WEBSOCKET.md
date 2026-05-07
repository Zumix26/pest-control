# WebSocket Server Setup

## Установка зависимостей

```bash
npm install
```

## Запуск WebSocket сервера

### Linux/Mac:

```bash
# Используйте скрипт для автоматической загрузки .env
chmod +x start-websocket.sh
./start-websocket.sh
```

Или вручную:
```bash
export $(grep -v '^#' .env | xargs)
npm start
```

### Windows (PowerShell):

```powershell
# Используйте PowerShell скрипт
.\start-websocket.ps1
```

Или вручную:
```powershell
$env:APP_NAME="IoT Pest Control System"
$env:REDIS_PREFIX="iot_pest_control_system_database_"
npm start
```

### Для разработки с автоперезагрузкой:

```bash
npm run dev
```

## Переменные окружения

Создайте файл `.env` в корне проекта или установите переменные окружения:

```env
WS_PORT=8080
REDIS_HOST=127.0.0.1
REDIS_PORT=6379
REDIS_PASSWORD=null
APP_NAME="IoT Pest Control System"
REDIS_PREFIX=iot_pest_control_system_database_
```

**Важно:** `REDIS_PREFIX` должен соответствовать префиксу из Laravel `config/database.php`. 
По умолчанию Laravel использует `{APP_NAME}_database_` (где APP_NAME преобразуется в slug).

## Настройка Laravel Broadcasting

Убедитесь, что в `.env` Laravel установлено:

```env
BROADCAST_CONNECTION=redis
BROADCAST_REDIS_CONNECTION=default
```

## Как это работает

1. Laravel отправляет события через Redis pub/sub в канал `laravel_database_trap-events`
2. WebSocket сервер слушает этот канал
3. При получении события сервер отправляет его всем подключенным WebSocket клиентам
4. Frontend получает событие и показывает уведомление

## Проверка работы

1. Запустите Redis: `redis-server`
2. Запустите WebSocket сервер: `npm start`
3. Запустите Laravel приложение
4. Откройте frontend в браузере
5. Создайте тестовое событие через API или используйте кнопку "Сработать" в интерфейсе

## Troubleshooting

- Если WebSocket не подключается, проверьте порт в `.env` и во фронтенде
- Если события не приходят, проверьте подключение к Redis и канал broadcasting
- Проверьте логи WebSocket сервера для отладки
