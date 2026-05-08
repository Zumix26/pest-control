<?php

declare(strict_types=1);

namespace App\Listeners;

use Domain\Monitoring\Events\LowBatteryDetected;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

final class SendLowBatteryNotification implements ShouldQueue
{
    /**
     * The name of the queue the job should be sent to.
     */
    public string $queue = 'notifications';

    /**
     * The number of times the job may be attempted.
     */
    public int $tries = 5;

    /**
     * The number of seconds to wait before retrying the job.
     */
    public int $backoff = 120;

    public function __construct() {}

    public function handle(LowBatteryDetected $event): void
    {
        // TODO: Implement actual notification logic (email, SMS, webhook, etc.)
        Log::warning('Low battery detected', [
            'trap_id' => $event->trapId,
            'trap_name' => $event->trapName,
            'gateway_id' => $event->gatewayId,
            'battery_level' => $event->batteryLevel,
        ]);
    }
}
