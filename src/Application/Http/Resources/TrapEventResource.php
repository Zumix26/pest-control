<?php

declare(strict_types=1);

namespace App\Http\Resources;

use App\Domain\Monitoring\Models\TrapEvent;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Attributes as OA;

/**
 * @property TrapEvent $resource
 */
#[OA\Schema(
    schema: 'TrapEventResource',
    properties: [
        new OA\Property(property: 'id', description: 'UUID события', type: 'string', format: 'uuid', example: '9d4e1c45-6b2a-4f8e-9c7d-3a1b5e8f4d2c'),
        new OA\Property(property: 'trap_id', description: 'UUID ловушки', type: 'string', format: 'uuid', example: '9d4e1c45-6b2a-4f8e-9c7d-3a1b5e8f4d2c'),
        new OA\Property(property: 'caught_at', description: 'Время срабатывания', type: 'string', format: 'date-time', example: '2024-01-01T12:00:00+00:00'),
        new OA\Property(property: 'battery_level', description: 'Уровень заряда батареи (%)', type: 'integer', minimum: 0, maximum: 100, example: 85),
        new OA\Property(property: 'rssi', description: 'Мощность сигнала (dBm)', type: 'integer', minimum: -120, maximum: 0, example: -65),
        new OA\Property(property: 'signal_quality', description: 'Качество сигнала', type: 'string', enum: ['excellent', 'good', 'fair', 'poor', 'very_poor'], example: 'good'),
        new OA\Property(property: 'has_weak_signal', description: 'Слабый сигнал', type: 'boolean', example: false),
        new OA\Property(
            property: 'metadata',
            description: 'Дополнительные метаданные',
            type: 'object',
            example: ['battery_level' => 85, 'rssi' => -65]
        ),
        new OA\Property(property: 'created_at', description: 'Дата создания записи', type: 'string', format: 'date-time', example: '2024-01-01T12:00:01+00:00')
    ]
)]
final class TrapEventResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'trap_id' => $this->resource->trap_id,
            'caught_at' => $this->resource->caught_at->format(\DateTimeInterface::ATOM),
            'battery_level' => $this->resource->battery_level,
            'rssi' => $this->resource->rssi,
            'signal_quality' => $this->resource->signalQuality(),
            'has_weak_signal' => $this->resource->hasWeakSignal(),
            'metadata' => $this->resource->metadata,
            'created_at' => $this->resource->created_at->format(\DateTimeInterface::ATOM),
        ];
    }
}
