<?php

declare(strict_types=1);

namespace App\Infrastructure\Persistence\Eloquent\Mappers;

use App\Domain\Monitoring\Entities\TrapEvent;
use App\Infrastructure\Persistence\Eloquent\Models\EloquentTrapEvent;

final class TrapEventMapper
{
    public static function toDomain(EloquentTrapEvent $eloquent): TrapEvent
    {
        return TrapEvent::fromPrimitives(
            id: $eloquent->id,
            trapId: $eloquent->trap_id,
            caughtAt: $eloquent->caught_at->toIso8601String(),
            batteryLevel: $eloquent->battery_level,
            rssi: $eloquent->rssi,
            metadata: $eloquent->metadata ?? [],
            createdAt: $eloquent->created_at->toIso8601String(),
        );
    }

    public static function toEloquent(TrapEvent $event, ?EloquentTrapEvent $eloquent = null): EloquentTrapEvent
    {
        if ($eloquent === null) {
            $eloquent = new EloquentTrapEvent();
            $eloquent->id = $event->id();
        }

        $eloquent->trap_id = $event->trapId();
        $eloquent->caught_at = $event->caughtAt();
        $eloquent->battery_level = $event->batteryLevel()->value();
        $eloquent->rssi = $event->signalStrength()->rssi();
        $eloquent->metadata = $event->metadata();
        $eloquent->created_at = $event->createdAt();

        return $eloquent;
    }
}
