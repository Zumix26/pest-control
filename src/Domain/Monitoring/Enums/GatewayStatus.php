<?php

declare(strict_types=1);

namespace App\Domain\Monitoring\Enums;

enum GatewayStatus: string
{
    case ONLINE = 'online';
    case OFFLINE = 'offline';
    case MAINTENANCE = 'maintenance';
    case IN_STOCK = 'in_stock';

    public function label(): string
    {
        return match($this) {
            self::ONLINE => 'Online',
            self::OFFLINE => 'Offline',
            self::MAINTENANCE => 'Maintenance',
            self::IN_STOCK => 'In Stock',
        };
    }

    public function isAvailable(): bool
    {
        return $this === self::ONLINE;
    }
}
