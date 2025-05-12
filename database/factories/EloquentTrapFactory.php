<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Domain\Monitoring\Enums\TrapStatus;
use App\Domain\Monitoring\Enums\TrapType;
use App\Infrastructure\Persistence\Eloquent\Models\EloquentGateway;
use App\Infrastructure\Persistence\Eloquent\Models\EloquentTrap;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<EloquentTrap>
 */
final class EloquentTrapFactory extends Factory
{
    protected $model = EloquentTrap::class;

    public function definition(): array
    {
        return [
            'hardware_id' => 'TRAP-' . strtoupper(Str::random(8)),
            'gateway_id' => EloquentGateway::factory(),
            'name' => fake()->word() . ' Trap #' . fake()->numberBetween(1, 999),
            'type' => fake()->randomElement(TrapType::cases()),
            'status' => fake()->randomElement(TrapStatus::cases()),
            'location' => [
                'latitude' => fake()->latitude(),
                'longitude' => fake()->longitude(),
            ],
            'battery_level' => fake()->numberBetween(20, 100),
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
            'battery_level' => fake()->numberBetween(5, 19),
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
