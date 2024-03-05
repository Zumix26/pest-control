<?php

declare(strict_types=1);

namespace App\Domain\Monitoring\Enums;

enum TrapStatus: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case MAINTENANCE = 'maintenance';
    case FAULTY = 'faulty';

    public function label(): string
    {
        return match($this) {
            self::ACTIVE => 'Active',
            self::INACTIVE => 'Inactive',
            self::MAINTENANCE => 'Maintenance',
            self::FAULTY => 'Faulty',
        };
    }

    public function isOperational(): bool
    {
        return $this === self::ACTIVE;
    }
}
