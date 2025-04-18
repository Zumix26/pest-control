<?php

declare(strict_types=1);

namespace App\Application\Http\Resources;

use App\Domain\Monitoring\Entities\TrapEvent;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property TrapEvent $resource
 */
final class TrapEventResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id(),
            'trap_id' => $this->resource->trapId(),
            'caught_at' => $this->resource->caughtAt()->toIso8601String(),
            'battery_level' => $this->resource->batteryLevel()->value(),
            'rssi' => $this->resource->signalStrength()->rssi(),
            'signal_quality' => $this->resource->signalStrength()->quality(),
            'has_weak_signal' => $this->resource->hasWeakSignal(),
            'metadata' => $this->resource->metadata(),
            'created_at' => $this->resource->createdAt()->toIso8601String(),
        ];
    }
}
