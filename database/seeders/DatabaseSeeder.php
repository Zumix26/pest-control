<?php

declare(strict_types=1);

namespace Database\Seeders;

use Domain\Monitoring\Models\Gateway;
use App\Domain\Monitoring\Models\Trap;
use App\Domain\Monitoring\Models\TrapEvent;
use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create 5 gateways
        Gateway::factory()
            ->count(5)
            ->online()
            ->create()
            ->each(function (Gateway $gateway) {
                // Create 10 traps per gateway
                Trap::factory()
                    ->count(10)
                    ->active()
                    ->for($gateway, 'gateway')
                    ->create()
                    ->each(function (Trap $trap) {
                        // Create 5 events per trap
                        $events = TrapEvent::factory()
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
        Trap::factory()
            ->count(3)
            ->active()
            ->lowBattery()
            ->create();

        // Create some traps with specific types
        Trap::factory()->count(2)->ratTrap()->active()->create();
        Trap::factory()->count(2)->mouseTrap()->active()->create();
        Trap::factory()->count(2)->insectTrap()->active()->create();
    }
}
