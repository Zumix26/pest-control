<?php

declare(strict_types=1);

namespace App\Application\Listeners;

use App\Domain\Monitoring\Events\LowBatteryDetected;
use App\Domain\Monitoring\Events\TrapTriggered;
use Illuminate\Contracts\Queue\ShouldQueue;

final class CheckBatteryLevel implements ShouldQueue
{
    /**
     * The name of the queue the job should be sent to.
     */
    public string $queue = 'monitoring';

    /**
     * The number of times the job may be attempted.
     */
    public int $tries = 3;

    /**
     * The number of seconds to wait before retrying the job.
     */
    public int $backoff = 60;

    public function __construct() {}

    public function handle(TrapTriggered $event): void
    {
        // Battery is considered low if below 20%
        if ($event->batteryLevel < 20) {
            event(new LowBatteryDetected(
                trapId: $event->trapId,
                trapName: $event->trapName,
                gatewayId: $event->gatewayId,
                batteryLevel: $event->batteryLevel,
            ));
        }
    }
}
