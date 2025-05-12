<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Infrastructure\Persistence\Eloquent\Models\EloquentGateway;
use App\Infrastructure\Persistence\Eloquent\Models\EloquentTrap;
use App\Infrastructure\Persistence\Eloquent\Models\EloquentTrapEvent;
use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create 5 gateways
        EloquentGateway::factory()
            ->count(5)
            ->online()
            ->create()
            ->each(function (EloquentGateway $gateway) {
                // Create 10 traps per gateway
                EloquentTrap::factory()
                    ->count(10)
                    ->active()
                    ->for($gateway, 'gateway')
                    ->create()
                    ->each(function (EloquentTrap $trap) {
                        // Create 5 events per trap
                        $events = EloquentTrapEvent::factory()
                            ->count(5)
                            ->for($trap, 'trap')
                            ->create();

                        // Update trap statistics based on events
                        $latestEvent = $events->sortByDesc('caught_at')->first();

                        $trap->update([
                            'total_catches' => $events->count(),
                            'last_event_at' => $latestEvent->caught_at,
                            'battery_level' => $latestEvent->battery_level,
                        ]);
                    });
            });

        // Create some traps with low battery
        EloquentTrap::factory()
            ->count(3)
            ->active()
            ->lowBattery()
            ->create();

        // Create some traps with specific types
        EloquentTrap::factory()
            ->count(2)
            ->ratTrap()
            ->active()
            ->create();

        EloquentTrap::factory()
            ->count(2)
            ->mouseTrap()
            ->active()
            ->create();

        EloquentTrap::factory()
            ->count(2)
            ->insectTrap()
            ->active()
            ->create();
    }
}
