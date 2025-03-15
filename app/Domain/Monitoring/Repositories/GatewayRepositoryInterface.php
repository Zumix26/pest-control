<?php

declare(strict_types=1);

namespace App\Domain\Monitoring\Repositories;

use App\Domain\Monitoring\Entities\Gateway;
use App\Domain\Monitoring\Enums\GatewayStatus;

interface GatewayRepositoryInterface
{
    public function save(Gateway $gateway): void;

    public function findById(string $id): ?Gateway;

    public function findByHardwareId(string $hardwareId): ?Gateway;

    public function findByApiKey(string $apiKey): ?Gateway;

    public function findAll(): array;

    public function findByStatus(GatewayStatus $status): array;

    public function delete(string $id): void;

    public function nextIdentity(): string;
}
