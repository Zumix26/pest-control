<?php

declare(strict_types=1);

namespace App\Domain\Monitoring\Repositories;

use App\Domain\Monitoring\Entities\Trap;
use App\Domain\Monitoring\Enums\TrapStatus;
use App\Domain\Monitoring\Enums\TrapType;

interface TrapRepositoryInterface
{
    public function save(Trap $trap): void;

    public function findById(string $id): ?Trap;

    public function findByHardwareId(string $hardwareId): ?Trap;

    public function findByGatewayId(string $gatewayId): array;

    public function findAll(): array;

    public function findByStatus(TrapStatus $status): array;

    public function findByType(TrapType $type): array;

    public function findLowBattery(int $threshold = 20): array;

    public function delete(string $id): void;

    public function nextIdentity(): string;
}
