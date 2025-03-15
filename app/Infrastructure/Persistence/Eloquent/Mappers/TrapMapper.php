<?php

declare(strict_types=1);

namespace App\Infrastructure\Persistence\Eloquent\Mappers;

use App\Domain\Monitoring\Entities\Trap;
use App\Infrastructure\Persistence\Eloquent\Models\EloquentTrap;

final class TrapMapper
{
    public static function toDomain(EloquentTrap $eloquent): Trap
    {
        return Trap::fromPrimitives(
            id: $eloquent->id,
            hardwareId: $eloquent->hardware_id,
            gatewayId: $eloquent->gateway_id,
            name: $eloquent->name,
            type: $eloquent->type->value,
            status: $eloquent->status->value,
            location: $eloquent->location ?? [],
            batteryLevel: $eloquent->battery_level,
            totalCatches: $eloquent->total_catches,
            lastEventAt: $eloquent->last_event_at?->toIso8601String(),
            createdAt: $eloquent->created_at->toIso8601String(),
            updatedAt: $eloquent->updated_at->toIso8601String(),
            deletedAt: $eloquent->deleted_at?->toIso8601String(),
        );
    }

    public static function toEloquent(Trap $trap, ?EloquentTrap $eloquent = null): EloquentTrap
    {
        if ($eloquent === null) {
            $eloquent = new EloquentTrap();
            $eloquent->id = $trap->id();
        }

        $eloquent->hardware_id = $trap->hardwareId()->value();
        $eloquent->gateway_id = $trap->gatewayId();
        $eloquent->name = $trap->name();
        $eloquent->type = $trap->type();
        $eloquent->status = $trap->status();
        $eloquent->location = $trap->location()->toArray();
        $eloquent->battery_level = $trap->batteryLevel()->value();
        $eloquent->total_catches = $trap->totalCatches();
        $eloquent->last_event_at = $trap->lastEventAt();
        $eloquent->created_at = $trap->createdAt();
        $eloquent->updated_at = $trap->updatedAt();
        $eloquent->deleted_at = $trap->deletedAt();

        return $eloquent;
    }
}
