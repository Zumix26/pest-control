<?php

declare(strict_types=1);

use App\DTOs\CreateGatewayDTO;
use App\UseCases\CreateGatewayUseCase;
use Domain\Monitoring\Enums\GatewayStatus;
use Domain\Monitoring\Models\Gateway;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('it creates a gateway successfully', function () {
    $dto = new CreateGatewayDTO(
        hardwareId: 'GW001',
        facilityId: null,
        name: 'Main Gateway',
        location: ['latitude' => 40.7128, 'longitude' => -74.0060],
        status: GatewayStatus::ONLINE,
    );

    $gateway = (new CreateGatewayUseCase())->execute($dto);

    expect($gateway)->toBeInstanceOf(Gateway::class)
        ->and($gateway->hardware_id)->toBe('GW001')
        ->and($gateway->name)->toBe('Main Gateway')
        ->and($gateway->status)->toBe(GatewayStatus::ONLINE)
        ->and($gateway->api_key)->toHaveLength(64);

    $this->assertDatabaseHas('gateways', ['hardware_id' => 'GW001']);
});

test('it throws exception when gateway with hardware_id already exists', function () {
    Gateway::create([
        'hardware_id' => 'GW001',
        'api_key' => 'existing-key',
        'name' => 'Existing Gateway',
        'location' => ['latitude' => 0, 'longitude' => 0],
        'status' => GatewayStatus::ONLINE,
        'last_seen_at' => now(),
    ]);

    $dto = new CreateGatewayDTO(
        hardwareId: 'GW001',
        facilityId: null,
        name: 'New Gateway',
        location: ['latitude' => 40.7128, 'longitude' => -74.0060],
        status: GatewayStatus::ONLINE,
    );

    expect(fn () => (new CreateGatewayUseCase())->execute($dto))
        ->toThrow(DomainException::class, "Gateway with hardware_id 'GW001' already exists");
});

test('it generates a unique api key of 64 characters', function () {
    $dto = new CreateGatewayDTO(
        hardwareId: 'GW001',
        facilityId: null,
        name: 'Test Gateway',
        location: ['latitude' => 40.7128, 'longitude' => -74.0060],
        status: GatewayStatus::ONLINE,
    );

    $gateway = (new CreateGatewayUseCase())->execute($dto);

    expect($gateway->api_key)->toHaveLength(64);
});

test('it creates gateway with specified status', function () {
    $dto = new CreateGatewayDTO(
        hardwareId: 'GW001',
        facilityId: null,
        name: 'Test Gateway',
        location: ['latitude' => 40.7128, 'longitude' => -74.0060],
        status: GatewayStatus::OFFLINE,
    );

    $gateway = (new CreateGatewayUseCase())->execute($dto);

    expect($gateway->status)->toBe(GatewayStatus::OFFLINE);
});

test('it stores location data correctly', function () {
    $dto = new CreateGatewayDTO(
        hardwareId: 'GW001',
        facilityId: null,
        name: 'London Gateway',
        location: ['latitude' => 51.5074, 'longitude' => -0.1278],
        status: GatewayStatus::ONLINE,
    );

    $gateway = (new CreateGatewayUseCase())->execute($dto);

    expect($gateway->location)->toBe(['latitude' => 51.5074, 'longitude' => -0.1278]);
});
