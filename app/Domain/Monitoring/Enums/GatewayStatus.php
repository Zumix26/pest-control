<?php

declare(strict_types=1);

namespace App\Domain\Monitoring\Enums;

enum GatewayStatus: string
{
    case ONLINE = 'online';
    case OFFLINE = 'offline';
    case MAINTENANCE = 'maintenance';

    public function label(): string
    {
        return match($this) {
            self::ONLINE => 'Online',
            self::OFFLINE => 'Offline',
            self::MAINTENANCE => 'Maintenance',
        };
    }

    public function isAvailable(): bool
    {
        return $this === self::ONLINE;
    }
}
