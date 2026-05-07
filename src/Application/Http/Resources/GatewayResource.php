<?php

declare(strict_types=1);

namespace App\Http\Resources;

use Domain\Monitoring\Models\Gateway;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Attributes as OA;

/**
 * @property Gateway $resource
 */
#[OA\Schema(
    schema: 'GatewayResource',
    properties: [
        new OA\Property(property: 'id', description: 'UUID шлюза', type: 'string', format: 'uuid', example: '9d4e1c45-6b2a-4f8e-9c7d-3a1b5e8f4d2c'),
        new OA\Property(property: 'hardware_id', description: 'Идентификатор оборудования', type: 'string', example: 'GW-001-ABC123'),
        new OA\Property(property: 'facility_id', description: 'UUID объекта', type: 'string', format: 'uuid', example: '019bac36-54b6-70dc-94c3-cea624a51791'),
        new OA\Property(property: 'name', description: 'Название шлюза', type: 'string', example: 'Gateway Floor 1'),
        new OA\Property(
            property: 'location',
            description: 'Координаты расположения',
            properties: [
                new OA\Property(property: 'latitude', type: 'number', format: 'float', example: 50.4501),
                new OA\Property(property: 'longitude', type: 'number', format: 'float', example: 30.5234),
            ],
            type: 'object'
        ),
        new OA\Property(property: 'status', description: 'Статус шлюза', type: 'string', enum: ['online', 'offline', 'maintenance'], example: 'online'),
        new OA\Property(property: 'is_online', description: 'Онлайн статус', type: 'boolean', example: true),
        new OA\Property(property: 'last_seen_at', description: 'Время последней активности', type: 'string', format: 'date-time', example: '2024-01-01T12:00:00+00:00'),
        new OA\Property(property: 'created_at', description: 'Дата создания', type: 'string', format: 'date-time', example: '2024-01-01T10:00:00+00:00'),
        new OA\Property(property: 'updated_at', description: 'Дата обновления', type: 'string', format: 'date-time', example: '2024-01-01T12:00:00+00:00'),
    ]
)]
final class GatewayResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'hardware_id' => $this->resource->hardware_id,
            'facility_id' => $this->resource->facility_id,
            'name' => $this->resource->name,
            'location' => $this->resource->location,
            'status' => $this->resource->status->value,
            'is_online' => $this->resource->isOnline(),
            'last_seen_at' => $this->resource->last_seen_at?->format(\DateTimeInterface::ATOM),
            'created_at' => $this->resource->created_at->format(\DateTimeInterface::ATOM),
            'updated_at' => $this->resource->updated_at->format(\DateTimeInterface::ATOM),
        ];
    }
}
