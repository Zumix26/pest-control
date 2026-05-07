<?php

declare(strict_types=1);

namespace App\Domain\Monitoring\Enums;

enum CustomerType: string
{
    case INDIVIDUAL = 'individual';
    case COMPANY = 'company';

    public function label(): string
    {
        return match($this) {
            self::INDIVIDUAL => 'Individual',
            self::COMPANY => 'Company',
        };
    }
}
