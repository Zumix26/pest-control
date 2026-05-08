<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use OpenApi\Attributes as OA;

#[OA\Info(
    version: '1.0.0',
    title: 'IoT Trap Monitoring System API',
    description: 'API для системы мониторинга IoT ловушек для борьбы с вредителями. Включает управление шлюзами, ловушками и регистрацию событий срабатывания.',
    contact: new OA\Contact(
        email: 'support@trap-monitoring.local'
    ),
    license: new OA\License(
        name: 'MIT'
    )
)]
#[OA\Server(
    url: 'http://127.0.0.1:3000/api',
    description: 'Local Development Server'
)]
#[OA\Server(
    url: 'https://api.trap-monitoring.local/api',
    description: 'Production Server'
)]
#[OA\SecurityScheme(
    securityScheme: 'HmacSignature',
    type: 'apiKey',
    in: 'header',
    name: 'X-Signature',
    description: 'HMAC SHA-256 signature для защиты IoT endpoints. Используйте hash_hmac("sha256", payload, gateway_api_key)'
)]
#[OA\Tag(
    name: 'Gateways',
    description: 'Управление IoT шлюзами'
)]
#[OA\Tag(
    name: 'Traps',
    description: 'Управление ловушками для вредителей'
)]
#[OA\Tag(
    name: 'Trap Events',
    description: 'Регистрация событий срабатывания ловушек'
)]
#[OA\Tag(
    name: 'Facilities',
    description: 'Управление объектами/зданиями'
)]
#[OA\Tag(
    name: 'Customers',
    description: 'Управление клиентами'
)]
class OpenApiSpec
{
    // This class exists solely for OpenAPI documentation annotations
}
