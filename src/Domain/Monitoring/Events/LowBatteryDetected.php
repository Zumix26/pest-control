<?php

declare(strict_types=1);

namespace App\Domain\Monitoring\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

final class LowBatteryDetected
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    public function __construct(
        public string $trapId,
        public string $trapName,
        public string $gatewayId,
        public int $batteryLevel,
    ) {}
}
