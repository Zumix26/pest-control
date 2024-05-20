<?php

declare(strict_types=1);

namespace App\Domain\Monitoring\Entities;

use App\Domain\Monitoring\ValueObjects\BatteryLevel;
use App\Domain\Monitoring\ValueObjects\SignalStrength;

final class TrapEvent
{
    private function __construct(
        private string $id,
        private string $trapId,
        private \DateTimeImmutable $caughtAt,
        private BatteryLevel $batteryLevel,
        private SignalStrength $signalStrength,
        private array $metadata,
        private \DateTimeImmutable $createdAt,
    ) {}

    public static function create(
        string $id,
        string $trapId,
        \DateTimeImmutable $caughtAt,
        BatteryLevel $batteryLevel,
        SignalStrength $signalStrength,
        array $metadata = [],
    ): self {
        return new self(
            id: $id,
            trapId: $trapId,
            caughtAt: $caughtAt,
            batteryLevel: $batteryLevel,
            signalStrength: $signalStrength,
            metadata: $metadata,
            createdAt: new \DateTimeImmutable(),
        );
    }

    public static function fromPrimitives(
        string $id,
        string $trapId,
        string $caughtAt,
        int $batteryLevel,
        int $rssi,
        array $metadata,
        string $createdAt,
    ): self {
        return new self(
            id: $id,
            trapId: $trapId,
            caughtAt: new \DateTimeImmutable($caughtAt),
            batteryLevel: new BatteryLevel($batteryLevel),
            signalStrength: new SignalStrength($rssi),
            metadata: $metadata,
            createdAt: new \DateTimeImmutable($createdAt),
        );
    }

    public function hasWeakSignal(): bool
    {
        return $this->signalStrength->isWeak();
    }

    // Getters
    public function id(): string
    {
        return $this->id;
    }

    public function trapId(): string
    {
        return $this->trapId;
    }

    public function caughtAt(): \DateTimeImmutable
    {
        return $this->caughtAt;
    }

    public function batteryLevel(): BatteryLevel
    {
        return $this->batteryLevel;
    }

    public function signalStrength(): SignalStrength
    {
        return $this->signalStrength;
    }

    public function metadata(): array
    {
        return $this->metadata;
    }

    public function createdAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }
}
