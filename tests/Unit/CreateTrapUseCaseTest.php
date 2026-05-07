<?php

declare(strict_types=1);

use App\Application\DTOs\CreateTrapDTO;
use App\Application\UseCases\CreateTrapUseCase;
use App\Domain\Monitoring\Enums\GatewayStatus;
use App\Domain\Monitoring\Enums\TrapStatus;
use App\Domain\Monitoring\Enums\TrapType;
use Domain\Monitoring\Models\Gateway;
use App\Domain\Monitoring\Models\Trap;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

function makeGateway(): Gateway
{
    return Gateway::create([
        'hardware_id' => 'GW001',
        'api_key' => 'test-api-key-64chars-padded-to-fill-the-required-length-here',
        'name' => 'Test Gateway',
        'location' => ['latitude' => 40.7128, 'longitude' => -74.0060],
        'status' => GatewayStatus::ONLINE,
        'last_seen_at' => now(),
    ]);
}

test('it creates a trap successfully', function () {
    $gateway = makeGateway();

    $dto = new CreateTrapDTO(
        hardwareId: 'TRAP001',
        gatewayId: $gateway->id,
        name: 'Test Trap',
        type: TrapType::RAT,
        location: ['latitude' => 40.7128, 'longitude' => -74.0060],
        status: TrapStatus::ACTIVE,
    );

    $trap = (new CreateTrapUseCase())->execute($dto);

    expect($trap)->toBeInstanceOf(Trap::class)
        ->and($trap->hardware_id)->toBe('TRAP001')
        ->and($trap->name)->toBe('Test Trap')
        ->and($trap->type)->toBe(TrapType::RAT)
        ->and($trap->status)->toBe(TrapStatus::ACTIVE)
        ->and($trap->battery_level)->toBe(100)
        ->and($trap->total_catches)->toBe(0);

    $this->assertDatabaseHas('traps', ['hardware_id' => 'TRAP001']);
});

test('it throws exception when gateway not found', function () {
    $dto = new CreateTrapDTO(
        hardwareId: 'TRAP001',
        gatewayId: 'non-existent-gateway-id',
        name: 'Test Trap',
        type: TrapType::RAT,
        location: ['latitude' => 40.7128, 'longitude' => -74.0060],
        status: TrapStatus::ACTIVE,
    );

    expect(fn () => (new CreateTrapUseCase())->execute($dto))
        ->toThrow(DomainException::class, 'Gateway not found');
});

test('it throws exception when trap with hardware_id already exists', function () {
    $gateway = makeGateway();

    Trap::create([
        'hardware_id' => 'TRAP001',
        'gateway_id' => $gateway->id,
        'name' => 'Existing Trap',
        'type' => TrapType::RAT,
        'status' => TrapStatus::ACTIVE,
        'location' => ['latitude' => 0, 'longitude' => 0],
        'battery_level' => 100,
        'total_catches' => 0,
    ]);

    $dto = new CreateTrapDTO(
        hardwareId: 'TRAP001',
        gatewayId: $gateway->id,
        name: 'New Trap',
        type: TrapType::RAT,
        location: ['latitude' => 40.7128, 'longitude' => -74.0060],
        status: TrapStatus::ACTIVE,
    );

    expect(fn () => (new CreateTrapUseCase())->execute($dto))
        ->toThrow(DomainException::class, "Trap with hardware_id 'TRAP001' already exists");
});

test('it creates trap with initial battery at 100 percent', function () {
    $gateway = makeGateway();

    $dto = new CreateTrapDTO(
        hardwareId: 'TRAP001',
        gatewayId: $gateway->id,
        name: 'Test Trap',
        type: TrapType::RAT,
        location: ['latitude' => 40.7128, 'longitude' => -74.0060],
        status: TrapStatus::ACTIVE,
    );

    $trap = (new CreateTrapUseCase())->execute($dto);

    expect($trap->battery_level)->toBe(100)
        ->and($trap->total_catches)->toBe(0)
        ->and($trap->last_event_at)->toBeNull();
});
