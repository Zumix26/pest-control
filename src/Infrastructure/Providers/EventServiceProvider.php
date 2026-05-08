<?php

declare(strict_types=1);

namespace Infrastructure\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

final class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        \Domain\Monitoring\Events\TrapTriggered::class => [
            \App\Listeners\CheckBatteryLevel::class,
            \App\Listeners\SendTrapTriggeredNotification::class,
        ],
        \Domain\Monitoring\Events\LowBatteryDetected::class => [
            \App\Listeners\SendLowBatteryNotification::class,
        ],
    ];

    public function boot(): void
    {
        //
    }
}
