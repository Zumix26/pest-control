#!/usr/bin/env node

/**
 * WebSocket Server for Laravel Broadcasting
 * Listens to Redis pub/sub and forwards messages to WebSocket clients
 */

const WebSocket = require('ws');
const Redis = require('ioredis');

// Helper function to slugify string (like Laravel's Str::slug)
function slugify(text) {
    return text
        .toString()
        .toLowerCase()
        .trim()
        .replace(/\s+/g, '_')
        .replace(/[^\w\-]+/g, '')
        .replace(/\-\-+/g, '_');
}

// Read environment variables
const WS_PORT = process.env.WS_PORT || 8080;
const REDIS_HOST = process.env.REDIS_HOST || '127.0.0.1';
const REDIS_PORT = process.env.REDIS_PORT || 6379;
const REDIS_PASSWORD = process.env.REDIS_PASSWORD === 'null' ? null : process.env.REDIS_PASSWORD || null;
const APP_NAME = process.env.APP_NAME || 'laravel';
const REDIS_PREFIX = process.env.REDIS_PREFIX || `${slugify(APP_NAME)}_database_`;

// Create WebSocket server
const wss = new WebSocket.Server({ port: WS_PORT });

console.log(`WebSocket server listening on ws://localhost:${WS_PORT}`);

// Create Redis subscriber
const redisSubscriber = new Redis({
    host: REDIS_HOST,
    port: REDIS_PORT,
    password: REDIS_PASSWORD || undefined,
    retryStrategy: (times) => {
        const delay = Math.min(times * 50, 2000);
        console.log(`Retrying Redis connection (attempt ${times})...`);
        return delay;
    },
    maxRetriesPerRequest: null,
    enableReadyCheck: false,
    lazyConnect: true,
});

// Subscribe to Laravel broadcasting channel
// Laravel uses prefix from config/database.php (default: APP_NAME_database_)
// Channel format: {prefix}trap-events
const CHANNEL = `${REDIS_PREFIX}trap-events`;

console.log('');
console.log('Configuration:');
console.log(`  APP_NAME: ${APP_NAME}`);
console.log(`  REDIS_PREFIX: ${REDIS_PREFIX}`);
console.log(`  Redis: ${REDIS_HOST}:${REDIS_PORT}`);
console.log(`  Channel: ${CHANNEL}`);
console.log('');

// Connect to Redis first, then subscribe
redisSubscriber.connect()
    .then(() => {
        console.log(`✓ Connected to Redis at ${REDIS_HOST}:${REDIS_PORT}`);
        return redisSubscriber.subscribe(CHANNEL);
    })
    .then((count) => {
        console.log(`✓ Subscribed to Redis channel: ${CHANNEL} (${count} subscriptions)`);
    })
    .catch((err) => {
        console.error('❌ Failed to connect/subscribe to Redis:', err.message);
        console.error('');
        console.error('Please make sure Redis is running:');
        console.error('  - Windows: Download and install Redis from https://github.com/microsoftarchive/redis/releases');
        console.error('  - Or use Docker: docker run -d -p 6379:6379 redis:alpine');
        console.error('  - Or install via WSL: wsl sudo apt-get install redis-server');
        console.error('');
        console.error('Current Redis settings:');
        console.error(`  Host: ${REDIS_HOST}`);
        console.error(`  Port: ${REDIS_PORT}`);
        console.error(`  Password: ${REDIS_PASSWORD ? '***' : 'none'}`);
        console.error('');
        console.error('Retrying connection in 3 seconds...');
        
        // Retry connection every 3 seconds
        const retryInterval = setInterval(() => {
            redisSubscriber.connect()
                .then(() => {
                    console.log(`✓ Reconnected to Redis!`);
                    clearInterval(retryInterval);
                    return redisSubscriber.subscribe(CHANNEL);
                })
                .then((count) => {
                    console.log(`✓ Subscribed to Redis channel: ${CHANNEL}`);
                })
                .catch(() => {
                    // Will retry again
                });
        }, 3000);
    });

// Handle Redis messages
redisSubscriber.on('message', (channel, message) => {
    try {
        const data = JSON.parse(message);
        
        // Laravel broadcasting format: {event: "App\\Domain\\Monitoring\\Events\\TrapTriggered", data: {...}}
        // The data field contains the broadcastWith() result
        if (data.event && data.data) {
            // Extract event data from broadcastWith()
            const eventData = data.data.event || data.data;
            
            // Broadcast to all connected WebSocket clients in format expected by frontend
            const messageToSend = JSON.stringify({
                type: 'trap_event',
                event: eventData,
            });
            
            wss.clients.forEach((client) => {
                if (client.readyState === WebSocket.OPEN) {
                    client.send(messageToSend);
                }
            });
            
            console.log('Broadcasted trap event:', eventData.id || eventData.trap_id);
        } else {
            // Direct message format (fallback)
            wss.clients.forEach((client) => {
                if (client.readyState === WebSocket.OPEN) {
                    client.send(message);
                }
            });
        }
    } catch (error) {
        console.error('Error processing Redis message:', error);
        console.error('Message:', message);
    }
});

// Handle WebSocket connections
wss.on('connection', (ws, req) => {
    const clientIp = req.socket.remoteAddress;
    console.log(`New WebSocket connection from ${clientIp}`);

    ws.on('close', () => {
        console.log(`WebSocket connection closed from ${clientIp}`);
    });

    ws.on('error', (error) => {
        console.error(`WebSocket error from ${clientIp}:`, error);
    });

    // Send welcome message
    ws.send(JSON.stringify({
        type: 'connected',
        message: 'Connected to Trap Events WebSocket',
    }));
});

// Handle Redis connection errors
redisSubscriber.on('error', (error) => {
    console.error('Redis error:', error);
});

redisSubscriber.on('connect', () => {
    console.log(`✓ Redis connection established`);
});

redisSubscriber.on('ready', () => {
    console.log(`✓ Redis is ready`);
});

// Graceful shutdown
process.on('SIGINT', () => {
    console.log('\nShutting down WebSocket server...');
    wss.close(() => {
        redisSubscriber.disconnect();
        process.exit(0);
    });
});

process.on('SIGTERM', () => {
    console.log('\nShutting down WebSocket server...');
    wss.close(() => {
        redisSubscriber.disconnect();
        process.exit(0);
    });
});
