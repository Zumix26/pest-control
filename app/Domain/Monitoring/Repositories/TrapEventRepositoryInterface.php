<?php

declare(strict_types=1);

namespace App\Domain\Monitoring\Repositories;

use App\Domain\Monitoring\Entities\TrapEvent;

interface TrapEventRepositoryInterface
{
    public function save(TrapEvent $event): void;

    public function findById(string $id): ?TrapEvent;

    public function findByTrapId(string $trapId, int $limit = 50): array;

    public function findByDateRange(string $trapId, \DateTimeImmutable $from, \DateTimeImmutable $to): array;

    public function findRecent(int $limit = 100): array;

    public function countByTrapId(string $trapId): int;

    public function nextIdentity(): string;
}
