<?php

declare(strict_types=1);

namespace App\Application\Listeners;

use App\Domain\Monitoring\Events\TrapTriggered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

final class SendTrapTriggeredNotification implements ShouldQueue
{
    /**
     * The name of the queue the job should be sent to.
     */
    public string $queue = 'notifications';

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
        // TODO: Implement actual notification logic (email, SMS, webhook, etc.)
        Log::info('Trap triggered notification', [
            'trap_id' => $event->trapId,
            'trap_name' => $event->trapName,
            'gateway_id' => $event->gatewayId,
            'total_catches' => $event->totalCatches,
            'battery_level' => $event->batteryLevel,
            'caught_at' => $event->caughtAt,
        ]);
    }
}
