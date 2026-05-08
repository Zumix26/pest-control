<?php

declare(strict_types=1);

namespace Domain\Monitoring\Enums;

enum TrapStatus: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case MAINTENANCE = 'maintenance';
    case FAULTY = 'faulty';
    case IN_STOCK = 'in_stock';

    public function label(): string
    {
        return match($this) {
            self::ACTIVE => 'Active',
            self::INACTIVE => 'Inactive',
            self::MAINTENANCE => 'Maintenance',
            self::FAULTY => 'Faulty',
            self::IN_STOCK => 'In Stock',
        };
    }

    public function isOperational(): bool
    {
        return $this === self::ACTIVE;
    }
}
