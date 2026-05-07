#!/bin/bash

# Load Laravel .env file
if [ -f .env ]; then
    export $(grep -v '^#' .env | grep -E '^(APP_NAME|REDIS_HOST|REDIS_PORT|REDIS_PASSWORD|REDIS_PREFIX|WS_PORT)=' | xargs)
fi

# Convert APP_NAME to slug format (like Laravel)
if [ -z "$REDIS_PREFIX" ] && [ ! -z "$APP_NAME" ]; then
    APP_NAME_SLUG=$(echo "$APP_NAME" | tr '[:upper:]' '[:lower:]' | sed 's/[^a-z0-9]/_/g' | sed 's/__*/_/g' | sed 's/^_\|_$//g')
    export REDIS_PREFIX="${APP_NAME_SLUG}_database_"
fi

echo "Starting WebSocket server..."
echo "Redis: ${REDIS_HOST:-127.0.0.1}:${REDIS_PORT:-6379}"
echo "Channel: ${REDIS_PREFIX}trap-events"
echo ""

node websocket-server.js
