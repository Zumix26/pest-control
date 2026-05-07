<?php

declare(strict_types=1);

return [
    'default' => env('QUEUE_CONNECTION', 'rabbitmq'),

    'connections' => [
        'sync' => [
            'driver' => 'sync',
        ],

        'rabbitmq' => [
            'driver' => 'rabbitmq',
            'dsn' => env('RABBITMQ_DSN', null),
            'factory_class' => VladimirYuldashev\LaravelQueueRabbitMQ\Queue\Connectors\RabbitMQConnector::class,
            'host' => env('RABBITMQ_HOST', '127.0.0.1'),
            'port' => env('RABBITMQ_PORT', 5672),
            'user' => env('RABBITMQ_USER', 'guest'),
            'password' => env('RABBITMQ_PASSWORD', 'guest'),
            'vhost' => env('RABBITMQ_VHOST', '/'),
            'queue' => env('RABBITMQ_QUEUE', 'default'),
            'options' => [
                'exchange' => [
                    'name' => env('RABBITMQ_EXCHANGE_NAME', 'pest-control'),
                    'declare' => env('RABBITMQ_EXCHANGE_DECLARE', true),
                    'type' => env('RABBITMQ_EXCHANGE_TYPE', 'topic'),
                    'passive' => env('RABBITMQ_EXCHANGE_PASSIVE', false),
                    'durable' => env('RABBITMQ_EXCHANGE_DURABLE', true),
                    'auto_delete' => env('RABBITMQ_EXCHANGE_AUTODELETE', false),
                    'arguments' => env('RABBITMQ_EXCHANGE_ARGUMENTS'),
                ],
                'queue' => [
                    'declare' => env('RABBITMQ_QUEUE_DECLARE', true),
                    'bind' => env('RABBITMQ_QUEUE_DECLARE_BIND', true),
                    'passive' => env('RABBITMQ_QUEUE_PASSIVE', false),
                    'durable' => env('RABBITMQ_QUEUE_DURABLE', true),
                    'exclusive' => env('RABBITMQ_QUEUE_EXCLUSIVE', false),
                    'auto_delete' => env('RABBITMQ_QUEUE_AUTODELETE', false),
                    'arguments' => env('RABBITMQ_QUEUE_ARGUMENTS'),
                ],
            ],
            'sleep_on_error' => env('RABBITMQ_ERROR_SLEEP', 5),
            'worker' => env('RABBITMQ_WORKER', 'default'),
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => env('QUEUE_REDIS_CONNECTION', 'default'),
            'queue' => env('QUEUE_REDIS_QUEUE', 'default'),
            'retry_after' => env('QUEUE_REDIS_RETRY_AFTER', 90),
            'block_for' => null,
            'after_commit' => false,
        ],
    ],

    'batch' => [
        'database' => env('DB_CONNECTION', 'pgsql'),
        'table' => 'job_batches',
    ],

    'failed' => [
        'driver' => env('QUEUE_FAILED_DRIVER', 'database-uuids'),
        'database' => env('DB_CONNECTION', 'pgsql'),
        'table' => 'failed_jobs',
    ],
];
