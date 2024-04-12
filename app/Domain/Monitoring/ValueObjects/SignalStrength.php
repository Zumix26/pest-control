<?php

declare(strict_types=1);

namespace App\Domain\Monitoring\ValueObjects;

final readonly class SignalStrength
{
    private const WEAK_THRESHOLD = -80;

    public function __construct(
        private int $rssi,
    ) {
        if ($rssi < -120 || $rssi > 0) {
            throw new \InvalidArgumentException('RSSI must be between -120 and 0');
        }
    }

    public function rssi(): int
    {
        return $this->rssi;
    }

    public function isWeak(): bool
    {
        return $this->rssi < self::WEAK_THRESHOLD;
    }

    public function quality(): string
    {
        return match (true) {
            $this->rssi >= -50 => 'excellent',
            $this->rssi >= -60 => 'good',
            $this->rssi >= -70 => 'fair',
            $this->rssi >= -80 => 'poor',
            default => 'very_poor',
        };
    }
}
