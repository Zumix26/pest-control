<?php

declare(strict_types=1);

namespace App\Application\Http\Resources;

use App\Domain\Monitoring\Entities\Trap;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property Trap $resource
 */
final class TrapResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id(),
            'hardware_id' => $this->resource->hardwareId()->value(),
            'gateway_id' => $this->resource->gatewayId(),
            'name' => $this->resource->name(),
            'type' => $this->resource->type()->value,
            'status' => $this->resource->status()->value,
            'location' => $this->resource->location()->toArray(),
            'battery_level' => $this->resource->batteryLevel()->value(),
            'is_low_battery' => $this->resource->isLowBattery(),
            'is_operational' => $this->resource->isOperational(),
            'total_catches' => $this->resource->totalCatches(),
            'last_event_at' => $this->resource->lastEventAt()?->toIso8601String(),
            'created_at' => $this->resource->createdAt()->toIso8601String(),
            'updated_at' => $this->resource->updatedAt()->toIso8601String(),
            'deleted_at' => $this->resource->deletedAt()?->toIso8601String(),
        ];
    }
}
