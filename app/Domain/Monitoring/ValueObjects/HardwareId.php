<?php

declare(strict_types=1);

namespace App\Domain\Monitoring\ValueObjects;

final readonly class HardwareId
{
    public function __construct(
        private string $value,
    ) {
        if (empty($value)) {
            throw new \InvalidArgumentException('Hardware ID cannot be empty');
        }

        if (strlen($value) > 255) {
            throw new \InvalidArgumentException('Hardware ID cannot exceed 255 characters');
        }
    }

    public function value(): string
    {
        return $this->value;
    }

    public function equals(HardwareId $other): bool
    {
        return $this->value === $other->value;
    }
}
