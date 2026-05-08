<?php

declare(strict_types=1);

namespace Database\Factories;

use Domain\Monitoring\Models\Trap;
use Domain\Monitoring\Models\TrapEvent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TrapEvent>
 */
final class TrapEventFactory extends Factory
{
    protected $model = TrapEvent::class;

    public function definition(): array
    {
        return [
            'trap_id' => Trap::factory(),
            'caught_at' => $this->faker->dateTimeBetween('-30 days', 'now'),
            'battery_level' => $this->faker->numberBetween(20, 100),
            'rssi' => $this->faker->numberBetween(-120, -30),
            'metadata' => [
                'firmware_version' => $this->faker->randomElement(['1.0.0', '1.1.0', '1.2.0']),
                'temperature' => $this->faker->numberBetween(15, 35),
                'humidity' => $this->faker->numberBetween(30, 70),
            ],
        ];
    }

    public function weakSignal(): static
    {
        return $this->state(fn (array $attributes) => [
            'rssi' => $this->faker->numberBetween(-120, -81),
        ]);
    }

    public function strongSignal(): static
    {
        return $this->state(fn (array $attributes) => [
            'rssi' => $this->faker->numberBetween(-50, -30),
        ]);
    }

    public function lowBattery(): static
    {
        return $this->state(fn (array $attributes) => [
            'battery_level' => $this->faker->numberBetween(5, 19),
        ]);
    }
}
