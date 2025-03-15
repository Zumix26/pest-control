<?php

declare(strict_types=1);

namespace App\Infrastructure\Persistence\Eloquent\Repositories;

use App\Domain\Monitoring\Entities\Trap;
use App\Domain\Monitoring\Enums\TrapStatus;
use App\Domain\Monitoring\Enums\TrapType;
use App\Domain\Monitoring\Repositories\TrapRepositoryInterface;
use App\Infrastructure\Persistence\Eloquent\Mappers\TrapMapper;
use App\Infrastructure\Persistence\Eloquent\Models\EloquentTrap;
use Illuminate\Support\Str;

final class EloquentTrapRepository implements TrapRepositoryInterface
{
    public function save(Trap $trap): void
    {
        $eloquent = EloquentTrap::query()->withTrashed()->find($trap->id());
        $eloquent = TrapMapper::toEloquent($trap, $eloquent);
        $eloquent->save();
    }

    public function findById(string $id): ?Trap
    {
        $eloquent = EloquentTrap::query()->find($id);

        return $eloquent ? TrapMapper::toDomain($eloquent) : null;
    }

    public function findByHardwareId(string $hardwareId): ?Trap
    {
        $eloquent = EloquentTrap::query()
            ->where('hardware_id', $hardwareId)
            ->first();

        return $eloquent ? TrapMapper::toDomain($eloquent) : null;
    }

    public function findByGatewayId(string $gatewayId): array
    {
        return EloquentTrap::query()
            ->where('gateway_id', $gatewayId)
            ->get()
            ->map(fn (EloquentTrap $eloquent) => TrapMapper::toDomain($eloquent))
            ->all();
    }

    public function findAll(): array
    {
        return EloquentTrap::query()
            ->get()
            ->map(fn (EloquentTrap $eloquent) => TrapMapper::toDomain($eloquent))
            ->all();
    }

    public function findByStatus(TrapStatus $status): array
    {
        return EloquentTrap::query()
            ->where('status', $status)
            ->get()
            ->map(fn (EloquentTrap $eloquent) => TrapMapper::toDomain($eloquent))
            ->all();
    }

    public function findByType(TrapType $type): array
    {
        return EloquentTrap::query()
            ->where('type', $type)
            ->get()
            ->map(fn (EloquentTrap $eloquent) => TrapMapper::toDomain($eloquent))
            ->all();
    }

    public function findLowBattery(int $threshold = 20): array
    {
        return EloquentTrap::query()
            ->where('battery_level', '<', $threshold)
            ->where('status', TrapStatus::ACTIVE)
            ->get()
            ->map(fn (EloquentTrap $eloquent) => TrapMapper::toDomain($eloquent))
            ->all();
    }

    public function delete(string $id): void
    {
        EloquentTrap::query()
            ->where('id', $id)
            ->delete();
    }

    public function nextIdentity(): string
    {
        return (string) Str::uuid7();
    }
}
