<?php

declare(strict_types=1);

namespace App\Infrastructure\Persistence\Eloquent\Mappers;

use App\Domain\Monitoring\Entities\Gateway;
use App\Domain\Monitoring\Enums\GatewayStatus;
use App\Domain\Monitoring\ValueObjects\HardwareId;
use App\Domain\Monitoring\ValueObjects\Location;
use App\Infrastructure\Persistence\Eloquent\Models\EloquentGateway;

final class GatewayMapper
{
    public static function toDomain(EloquentGateway $eloquent): Gateway
    {
        return Gateway::fromPrimitives(
            id: $eloquent->id,
            hardwareId: $eloquent->hardware_id,
            apiKey: $eloquent->api_key,
            name: $eloquent->name,
            location: $eloquent->location ?? [],
            status: $eloquent->status->value,
            lastSeenAt: $eloquent->last_seen_at->toIso8601String(),
            createdAt: $eloquent->created_at->toIso8601String(),
            updatedAt: $eloquent->updated_at->toIso8601String(),
        );
    }

    public static function toEloquent(Gateway $gateway, ?EloquentGateway $eloquent = null): EloquentGateway
    {
        if ($eloquent === null) {
            $eloquent = new EloquentGateway();
            $eloquent->id = $gateway->id();
        }

        $eloquent->hardware_id = $gateway->hardwareId()->value();
        $eloquent->api_key = $gateway->apiKey();
        $eloquent->name = $gateway->name();
        $eloquent->location = $gateway->location()->toArray();
        $eloquent->status = $gateway->status();
        $eloquent->last_seen_at = $gateway->lastSeenAt();
        $eloquent->created_at = $gateway->createdAt();
        $eloquent->updated_at = $gateway->updatedAt();

        return $eloquent;
    }
}
