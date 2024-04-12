<?php

declare(strict_types=1);

namespace App\Domain\Monitoring\ValueObjects;

final readonly class BatteryLevel
{
    private const LOW_THRESHOLD = 20;

    public function __construct(
        private int $value,
    ) {
        if ($value < 0 || $value > 100) {
            throw new \InvalidArgumentException('Battery level must be between 0 and 100');
        }
    }

    public function value(): int
    {
        return $this->value;
    }

    public function isLow(): bool
    {
        return $this->value < self::LOW_THRESHOLD;
    }

    public function isCritical(): bool
    {
        return $this->value < 10;
    }
}
