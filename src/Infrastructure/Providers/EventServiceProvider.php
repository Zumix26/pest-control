<?php

declare(strict_types=1);

namespace App\Infrastructure\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

final class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        \App\Domain\Monitoring\Events\TrapTriggered::class => [
            \App\Application\Listeners\CheckBatteryLevel::class,
            \App\Application\Listeners\SendTrapTriggeredNotification::class,
        ],
        \App\Domain\Monitoring\Events\LowBatteryDetected::class => [
            \App\Application\Listeners\SendLowBatteryNotification::class,
        ],
    ];

    public function boot(): void
    {
        //
    }
}
