<?php

declare(strict_types=1);

namespace App\Http\Resources;

use App\Domain\Monitoring\Models\Trap;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Attributes as OA;

/**
 * @property Trap $resource
 */
#[OA\Schema(
    schema: 'TrapResource',
    properties: [
        new OA\Property(property: 'id', description: 'UUID ловушки', type: 'string', format: 'uuid', example: '9d4e1c45-6b2a-4f8e-9c7d-3a1b5e8f4d2c'),
        new OA\Property(property: 'hardware_id', description: 'Идентификатор оборудования', type: 'string', example: 'TRAP-001-XYZ789'),
        new OA\Property(property: 'gateway_id', description: 'UUID шлюза', type: 'string', format: 'uuid', example: '9d4e1c45-6b2a-4f8e-9c7d-3a1b5e8f4d2c'),
        new OA\Property(property: 'name', description: 'Название ловушки', type: 'string', example: 'Trap Kitchen Area'),
        new OA\Property(property: 'type', description: 'Тип ловушки', type: 'string', enum: ['rat', 'mouse', 'insect'], example: 'rat'),
        new OA\Property(property: 'status', description: 'Статус ловушки', type: 'string', enum: ['active', 'inactive', 'maintenance', 'faulty'], example: 'active'),
        new OA\Property(
            property: 'location',
            description: 'Координаты расположения',
            properties: [
                new OA\Property(property: 'latitude', type: 'number', format: 'float', example: 50.4501),
                new OA\Property(property: 'longitude', type: 'number', format: 'float', example: 30.5234)
            ],
            type: 'object'
        ),
        new OA\Property(property: 'battery_level', description: 'Уровень заряда батареи (%)', type: 'integer', minimum: 0, maximum: 100, example: 85),
        new OA\Property(property: 'is_low_battery', description: 'Низкий заряд батареи', type: 'boolean', example: false),
        new OA\Property(property: 'is_operational', description: 'Операционный статус', type: 'boolean', example: true),
        new OA\Property(property: 'total_catches', description: 'Общее количество срабатываний', type: 'integer', minimum: 0, example: 42),
        new OA\Property(property: 'last_event_at', description: 'Время последнего события', type: 'string', format: 'date-time', nullable: true, example: '2024-01-01T12:00:00+00:00'),
        new OA\Property(property: 'created_at', description: 'Дата создания', type: 'string', format: 'date-time', example: '2024-01-01T10:00:00+00:00'),
        new OA\Property(property: 'updated_at', description: 'Дата обновления', type: 'string', format: 'date-time', example: '2024-01-01T12:00:00+00:00'),
        new OA\Property(property: 'deleted_at', description: 'Дата удаления', type: 'string', format: 'date-time', nullable: true, example: null)
    ]
)]
final class TrapResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'hardware_id' => $this->resource->hardware_id,
            'gateway_id' => $this->resource->gateway_id,
            'name' => $this->resource->name,
            'type' => $this->resource->type->value,
            'status' => $this->resource->status->value,
            'location' => $this->resource->location,
            'battery_level' => $this->resource->battery_level,
            'is_low_battery' => $this->resource->isLowBattery(),
            'is_operational' => $this->resource->isOperational(),
            'total_catches' => $this->resource->total_catches,
            'last_event_at' => $this->resource->last_event_at?->format(\DateTimeInterface::ATOM),
            'created_at' => $this->resource->created_at->format(\DateTimeInterface::ATOM),
            'updated_at' => $this->resource->updated_at->format(\DateTimeInterface::ATOM),
            'deleted_at' => $this->resource->deleted_at?->format(\DateTimeInterface::ATOM),
        ];
    }
}
