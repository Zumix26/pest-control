<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Domain\Monitoring\Enums\GatewayStatus;
use App\Infrastructure\Persistence\Eloquent\Models\EloquentGateway;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<EloquentGateway>
 */
final class EloquentGatewayFactory extends Factory
{
    protected $model = EloquentGateway::class;

    public function definition(): array
    {
        return [
            'hardware_id' => 'GW-' . strtoupper(Str::random(8)),
            'api_key' => Str::random(64),
            'name' => fake()->city() . ' Gateway',
            'location' => [
                'latitude' => fake()->latitude(),
                'longitude' => fake()->longitude(),
            ],
            'status' => fake()->randomElement(GatewayStatus::cases()),
            'last_seen_at' => fake()->dateTimeBetween('-1 hour', 'now'),
        ];
    }

    public function online(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => GatewayStatus::ONLINE,
            'last_seen_at' => now(),
        ]);
    }

    public function offline(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => GatewayStatus::OFFLINE,
            'last_seen_at' => fake()->dateTimeBetween('-2 days', '-1 hour'),
        ]);
    }
}
