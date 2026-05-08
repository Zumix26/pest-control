<?php

declare(strict_types=1);

namespace Database\Factories;

use Domain\Monitoring\Enums\TrapStatus;
use Domain\Monitoring\Enums\TrapType;
use Domain\Monitoring\Models\Gateway;
use Domain\Monitoring\Models\Trap;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Trap>
 */
final class TrapFactory extends Factory
{
    protected $model = Trap::class;

    public function definition(): array
    {
        return [
            'hardware_id' => 'TRAP-' . strtoupper(Str::random(8)),
            'gateway_id' => Gateway::factory(),
            'name' => $this->faker->word() . ' Trap #' . $this->faker->numberBetween(1, 999),
            'type' => $this->faker->randomElement(TrapType::cases()),
            'status' => $this->faker->randomElement(TrapStatus::cases()),
            'location' => [
                'latitude' => $this->faker->latitude(),
                'longitude' => $this->faker->longitude(),
            ],
            'battery_level' => $this->faker->numberBetween(20, 100),
            'total_catches' => 0,
            'last_event_at' => null,
        ];
    }

    public function active(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => TrapStatus::ACTIVE,
        ]);
    }

    public function lowBattery(): static
    {
        return $this->state(fn (array $attributes) => [
            'battery_level' => $this->faker->numberBetween(5, 19),
        ]);
    }

    public function ratTrap(): static
    {
        return $this->state(fn (array $attributes) => [
            'type' => TrapType::RAT,
        ]);
    }

    public function mouseTrap(): static
    {
        return $this->state(fn (array $attributes) => [
            'type' => TrapType::MOUSE,
        ]);
    }

    public function insectTrap(): static
    {
        return $this->state(fn (array $attributes) => [
            'type' => TrapType::INSECT,
        ]);
    }
}
