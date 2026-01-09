<?php

declare(strict_types=1);

namespace App\Domain\Monitoring\Enums;

enum TrapType: string
{
    case RAT = 'rat';
    case MOUSE = 'mouse';
    case INSECT = 'insect';

    public function label(): string
    {
        return match($this) {
            self::RAT => 'Rat Trap',
            self::MOUSE => 'Mouse Trap',
            self::INSECT => 'Insect Trap',
        };
    }
}
