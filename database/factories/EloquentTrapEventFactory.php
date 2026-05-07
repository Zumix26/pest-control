<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Domain\Monitoring\Models\Trap;
use App\Domain\Monitoring\Models\TrapEvent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TrapEvent>
 */
final class EloquentTrapEventFactory extends Factory
{
    protected $model = TrapEvent::class;

    public function definition(): array
    {
        return [
            'trap_id' => Trap::factory(),
            'caught_at' => fake()->dateTimeBetween('-30 days', 'now'),
            'battery_level' => fake()->numberBetween(20, 100),
            'rssi' => fake()->numberBetween(-120, -30),
            'metadata' => [
                'firmware_version' => fake()->randomElement(['1.0.0', '1.1.0', '1.2.0']),
                'temperature' => fake()->numberBetween(15, 35),
                'humidity' => fake()->numberBetween(30, 70),
            ],
        ];
    }

    public function weakSignal(): static
    {
        return $this->state(fn (array $attributes) => [
            'rssi' => fake()->numberBetween(-120, -81),
        ]);
    }

    public function strongSignal(): static
    {
        return $this->state(fn (array $attributes) => [
            'rssi' => fake()->numberBetween(-50, -30),
        ]);
    }

    public function lowBattery(): static
    {
        return $this->state(fn (array $attributes) => [
            'battery_level' => fake()->numberBetween(5, 19),
        ]);
    }
}
