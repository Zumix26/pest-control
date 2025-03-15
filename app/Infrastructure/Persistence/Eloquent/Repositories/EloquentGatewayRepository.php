<?php

declare(strict_types=1);

namespace App\Infrastructure\Persistence\Eloquent\Repositories;

use App\Domain\Monitoring\Entities\Gateway;
use App\Domain\Monitoring\Enums\GatewayStatus;
use App\Domain\Monitoring\Repositories\GatewayRepositoryInterface;
use App\Infrastructure\Persistence\Eloquent\Mappers\GatewayMapper;
use App\Infrastructure\Persistence\Eloquent\Models\EloquentGateway;
use Illuminate\Support\Str;

final class EloquentGatewayRepository implements GatewayRepositoryInterface
{
    public function save(Gateway $gateway): void
    {
        $eloquent = EloquentGateway::query()->find($gateway->id());
        $eloquent = GatewayMapper::toEloquent($gateway, $eloquent);
        $eloquent->save();
    }

    public function findById(string $id): ?Gateway
    {
        $eloquent = EloquentGateway::query()->find($id);

        return $eloquent ? GatewayMapper::toDomain($eloquent) : null;
    }

    public function findByHardwareId(string $hardwareId): ?Gateway
    {
        $eloquent = EloquentGateway::query()
            ->where('hardware_id', $hardwareId)
            ->first();

        return $eloquent ? GatewayMapper::toDomain($eloquent) : null;
    }

    public function findByApiKey(string $apiKey): ?Gateway
    {
        $eloquent = EloquentGateway::query()
            ->where('api_key', $apiKey)
            ->first();

        return $eloquent ? GatewayMapper::toDomain($eloquent) : null;
    }

    public function findAll(): array
    {
        return EloquentGateway::query()
            ->get()
            ->map(fn (EloquentGateway $eloquent) => GatewayMapper::toDomain($eloquent))
            ->all();
    }

    public function findByStatus(GatewayStatus $status): array
    {
        return EloquentGateway::query()
            ->where('status', $status)
            ->get()
            ->map(fn (EloquentGateway $eloquent) => GatewayMapper::toDomain($eloquent))
            ->all();
    }

    public function delete(string $id): void
    {
        EloquentGateway::query()
            ->where('id', $id)
            ->delete();
    }

    public function nextIdentity(): string
    {
        return (string) Str::uuid7();
    }
}
