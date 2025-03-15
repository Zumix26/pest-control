<?php

declare(strict_types=1);

namespace App\Infrastructure\Persistence\Eloquent\Repositories;

use App\Domain\Monitoring\Entities\TrapEvent;
use App\Domain\Monitoring\Repositories\TrapEventRepositoryInterface;
use App\Infrastructure\Persistence\Eloquent\Mappers\TrapEventMapper;
use App\Infrastructure\Persistence\Eloquent\Models\EloquentTrapEvent;
use Illuminate\Support\Str;

final class EloquentTrapEventRepository implements TrapEventRepositoryInterface
{
    public function save(TrapEvent $event): void
    {
        $eloquent = EloquentTrapEvent::query()->find($event->id());
        $eloquent = TrapEventMapper::toEloquent($event, $eloquent);
        $eloquent->save();
    }

    public function findById(string $id): ?TrapEvent
    {
        $eloquent = EloquentTrapEvent::query()->find($id);

        return $eloquent ? TrapEventMapper::toDomain($eloquent) : null;
    }

    public function findByTrapId(string $trapId, int $limit = 50): array
    {
        return EloquentTrapEvent::query()
            ->where('trap_id', $trapId)
            ->orderByDesc('caught_at')
            ->limit($limit)
            ->get()
            ->map(fn (EloquentTrapEvent $eloquent) => TrapEventMapper::toDomain($eloquent))
            ->all();
    }

    public function findByDateRange(string $trapId, \DateTimeImmutable $from, \DateTimeImmutable $to): array
    {
        return EloquentTrapEvent::query()
            ->where('trap_id', $trapId)
            ->whereBetween('caught_at', [$from, $to])
            ->orderByDesc('caught_at')
            ->get()
            ->map(fn (EloquentTrapEvent $eloquent) => TrapEventMapper::toDomain($eloquent))
            ->all();
    }

    public function findRecent(int $limit = 100): array
    {
        return EloquentTrapEvent::query()
            ->with('trap')
            ->orderByDesc('caught_at')
            ->limit($limit)
            ->get()
            ->map(fn (EloquentTrapEvent $eloquent) => TrapEventMapper::toDomain($eloquent))
            ->all();
    }

    public function countByTrapId(string $trapId): int
    {
        return EloquentTrapEvent::query()
            ->where('trap_id', $trapId)
            ->count();
    }

    public function nextIdentity(): string
    {
        return (string) Str::uuid7();
    }
}
