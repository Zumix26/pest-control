# Redis Setup Guide

## Проблема: Redis не запущен

Если вы видите ошибку `ECONNREFUSED 127.0.0.1:6379`, это означает, что Redis сервер не запущен.

## Варианты установки Redis на Windows:

### Вариант 1: Docker (Рекомендуется)

```bash
docker run -d -p 6379:6379 --name redis redis:alpine
```

Проверка:
```bash
docker ps
```

### Вариант 2: WSL (Windows Subsystem for Linux)

Если у вас установлен WSL:

```bash
wsl
sudo apt-get update
sudo apt-get install redis-server
sudo service redis-server start
```

Проверка:
```bash
wsl redis-cli ping
# Должно вернуть: PONG
```

### Вариант 3: Установка Redis для Windows

1. Скачайте Redis для Windows: https://github.com/microsoftarchive/redis/releases
2. Распакуйте архив
3. Запустите `redis-server.exe`

Или используйте Memurai (совместимый с Redis): https://www.memurai.com/

### Вариант 4: Использовать облачный Redis

Если у вас есть облачный Redis (например, Redis Cloud, AWS ElastiCache), обновите переменные окружения:

```env
REDIS_HOST=your-redis-host
REDIS_PORT=your-redis-port
REDIS_PASSWORD=your-redis-password
```

## Проверка подключения

После установки Redis, проверьте подключение:

```bash
# Если Redis установлен локально
redis-cli ping
# Должно вернуть: PONG

# Или через Node.js
node -e "const Redis = require('ioredis'); const r = new Redis(); r.ping().then(console.log).catch(console.error);"
```

## Настройка Redis для Laravel Broadcasting

Убедитесь, что в `.env` Laravel установлено:

```env
BROADCAST_CONNECTION=redis
BROADCAST_DRIVER=redis
REDIS_HOST=127.0.0.1
REDIS_PORT=6379
REDIS_PASSWORD=null
```

## Запуск WebSocket сервера после установки Redis

```bash
npm start
```

Или используйте скрипты:
- Windows: `.\start-websocket.ps1`
- Linux/Mac: `./start-websocket.sh`
