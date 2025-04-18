<?php

declare(strict_types=1);

namespace App\Application\Http\Resources;

use App\Domain\Monitoring\Entities\Gateway;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property Gateway $resource
 */
final class GatewayResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id(),
            'hardware_id' => $this->resource->hardwareId()->value(),
            'name' => $this->resource->name(),
            'location' => $this->resource->location()->toArray(),
            'status' => $this->resource->status()->value,
            'is_online' => $this->resource->isOnline(),
            'last_seen_at' => $this->resource->lastSeenAt()->toIso8601String(),
            'created_at' => $this->resource->createdAt()->toIso8601String(),
            'updated_at' => $this->resource->updatedAt()->toIso8601String(),
        ];
    }
}
