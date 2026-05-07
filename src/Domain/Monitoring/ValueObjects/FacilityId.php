<?php

declare(strict_types=1);

namespace App\Domain\Monitoring\ValueObjects;

final readonly class FacilityId
{
    public function __construct(
        private ?string $value = null,
    ) {}

    public function value(): ?string
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return $this->value ?? '';
    }
}
