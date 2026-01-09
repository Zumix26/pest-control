<?php

declare(strict_types=1);

namespace App\Infrastructure\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

final class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        // Event listeners will be registered here
        // Example:
        // TrapTriggered::class => [
        //     UpdateTrapStatistics::class,
        //     CheckBatteryLevel::class,
        // ],
    ];

    public function boot(): void
    {
        //
    }
}
