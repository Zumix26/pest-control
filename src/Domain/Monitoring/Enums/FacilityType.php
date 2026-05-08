<?php

declare(strict_types=1);

namespace Domain\Monitoring\Enums;

enum FacilityType: string
{
    case WAREHOUSE = 'warehouse';
    case RESTAURANT = 'restaurant';
    case OFFICE = 'office';
    case RETAIL = 'retail';
    case INDUSTRIAL = 'industrial';

    public function label(): string
    {
        return match ($this) {
            self::WAREHOUSE => 'Warehouse',
            self::RESTAURANT => 'Restaurant',
            self::OFFICE => 'Office',
            self::RETAIL => 'Retail',
            self::INDUSTRIAL => 'Industrial',
        };
    }
}
