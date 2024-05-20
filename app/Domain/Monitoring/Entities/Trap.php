<?php

declare(strict_types=1);

namespace App\Domain\Monitoring\Entities;

use App\Domain\Monitoring\Enums\TrapStatus;
use App\Domain\Monitoring\Enums\TrapType;
use App\Domain\Monitoring\ValueObjects\BatteryLevel;
use App\Domain\Monitoring\ValueObjects\HardwareId;
use App\Domain\Monitoring\ValueObjects\Location;

final class Trap
{
    private function __construct(
        private string $id,
        private HardwareId $hardwareId,
        private string $gatewayId,
        private string $name,
        private TrapType $type,
        private TrapStatus $status,
        private Location $location,
        private BatteryLevel $batteryLevel,
        private int $totalCatches,
        private ?\DateTimeImmutable $lastEventAt,
        private \DateTimeImmutable $createdAt,
        private \DateTimeImmutable $updatedAt,
        private ?\DateTimeImmutable $deletedAt = null,
    ) {}

    public static function create(
        string $id,
        HardwareId $hardwareId,
        string $gatewayId,
        string $name,
        TrapType $type,
        Location $location,
    ): self {
        return new self(
            id: $id,
            hardwareId: $hardwareId,
            gatewayId: $gatewayId,
            name: $name,
            type: $type,
            status: TrapStatus::ACTIVE,
            location: $location,
            batteryLevel: new BatteryLevel(100),
            totalCatches: 0,
            lastEventAt: null,
            createdAt: new \DateTimeImmutable(),
            updatedAt: new \DateTimeImmutable(),
        );
    }

    public static function fromPrimitives(
        string $id,
        string $hardwareId,
        string $gatewayId,
        string $name,
        string $type,
        string $status,
        array $location,
        int $batteryLevel,
        int $totalCatches,
        ?string $lastEventAt,
        string $createdAt,
        string $updatedAt,
        ?string $deletedAt = null,
    ): self {
        return new self(
            id: $id,
            hardwareId: new HardwareId($hardwareId),
            gatewayId: $gatewayId,
            name: $name,
            type: TrapType::from($type),
            status: TrapStatus::from($status),
            location: Location::fromArray($location),
            batteryLevel: new BatteryLevel($batteryLevel),
            totalCatches: $totalCatches,
            lastEventAt: $lastEventAt ? new \DateTimeImmutable($lastEventAt) : null,
            createdAt: new \DateTimeImmutable($createdAt),
            updatedAt: new \DateTimeImmutable($updatedAt),
            deletedAt: $deletedAt ? new \DateTimeImmutable($deletedAt) : null,
        );
    }

    public function trigger(\DateTimeImmutable $at, BatteryLevel $batteryLevel): void
    {
        $this->totalCatches++;
        $this->lastEventAt = $at;
        $this->batteryLevel = $batteryLevel;
        $this->updatedAt = new \DateTimeImmutable();
    }

    public function updateStatus(TrapStatus $status): void
    {
        $this->status = $status;
        $this->updatedAt = new \DateTimeImmutable();
    }

    public function updateBatteryLevel(BatteryLevel $batteryLevel): void
    {
        $this->batteryLevel = $batteryLevel;
        $this->updatedAt = new \DateTimeImmutable();
    }

    public function isLowBattery(): bool
    {
        return $this->batteryLevel->isLow();
    }

    public function isOperational(): bool
    {
        return $this->status->isOperational();
    }

    public function markAsDeleted(): void
    {
        $this->deletedAt = new \DateTimeImmutable();
    }

    // Getters
    public function id(): string
    {
        return $this->id;
    }

    public function hardwareId(): HardwareId
    {
        return $this->hardwareId;
    }

    public function gatewayId(): string
    {
        return $this->gatewayId;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function type(): TrapType
    {
        return $this->type;
    }

    public function status(): TrapStatus
    {
        return $this->status;
    }

    public function location(): Location
    {
        return $this->location;
    }

    public function batteryLevel(): BatteryLevel
    {
        return $this->batteryLevel;
    }

    public function totalCatches(): int
    {
        return $this->totalCatches;
    }

    public function lastEventAt(): ?\DateTimeImmutable
    {
        return $this->lastEventAt;
    }

    public function createdAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function updatedAt(): \DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function deletedAt(): ?\DateTimeImmutable
    {
        return $this->deletedAt;
    }
}
