<?php

declare(strict_types=1);

use App\Application\DTOs\CreateTrapDTO;
use App\Application\UseCases\CreateTrapUseCase;
use App\Domain\Monitoring\Entities\Gateway;
use App\Domain\Monitoring\Entities\Trap;
use App\Domain\Monitoring\Enums\TrapStatus;
use App\Domain\Monitoring\Enums\TrapType;
use App\Domain\Monitoring\Repositories\GatewayRepositoryInterface;
use App\Domain\Monitoring\Repositories\TrapRepositoryInterface;
use App\Domain\Monitoring\ValueObjects\HardwareId;
use App\Domain\Monitoring\ValueObjects\Location;

test('it creates a trap successfully', function () {
    // Arrange
    $gatewayRepository = Mockery::mock(GatewayRepositoryInterface::class);
    $trapRepository = Mockery::mock(TrapRepositoryInterface::class);

    $gatewayId = 'gateway-123';
    $trapId = 'trap-456';

    $gateway = Gateway::create(
        id: $gatewayId,
        hardwareId: new HardwareId('GW001'),
        apiKey: 'test-api-key',
        name: 'Test Gateway',
        location: new Location(40.7128, -74.0060),
    );

    $dto = new CreateTrapDTO(
        hardwareId: 'TRAP001',
        gatewayId: $gatewayId,
        name: 'Test Trap',
        type: TrapType::RAT,
        status: TrapStatus::ACTIVE,
        location: ['latitude' => 40.7128, 'longitude' => -74.0060],
    );

    $gatewayRepository->shouldReceive('findById')
        ->once()
        ->with($gatewayId)
        ->andReturn($gateway);

    $trapRepository->shouldReceive('findByHardwareId')
        ->once()
        ->with('TRAP001')
        ->andReturn(null);

    $trapRepository->shouldReceive('nextIdentity')
        ->once()
        ->andReturn($trapId);

    $trapRepository->shouldReceive('save')
        ->once()
        ->withArgs(function (Trap $trap) use ($trapId) {
            return $trap->id() === $trapId
                && $trap->hardwareId()->value() === 'TRAP001'
                && $trap->name() === 'Test Trap'
                && $trap->type() === TrapType::RAT
                && $trap->status() === TrapStatus::ACTIVE;
        });

    $useCase = new CreateTrapUseCase($trapRepository, $gatewayRepository);

    // Act
    $result = $useCase->execute($dto);

    // Assert
    expect($result)->toBeInstanceOf(Trap::class)
        ->and($result->id())->toBe($trapId)
        ->and($result->hardwareId()->value())->toBe('TRAP001')
        ->and($result->name())->toBe('Test Trap')
        ->and($result->type())->toBe(TrapType::RAT)
        ->and($result->status())->toBe(TrapStatus::ACTIVE);
});

test('it throws exception when gateway not found', function () {
    // Arrange
    $gatewayRepository = Mockery::mock(GatewayRepositoryInterface::class);
    $trapRepository = Mockery::mock(TrapRepositoryInterface::class);

    $dto = new CreateTrapDTO(
        hardwareId: 'TRAP001',
        gatewayId: 'non-existent-gateway',
        name: 'Test Trap',
        type: TrapType::RAT,
        status: TrapStatus::ACTIVE,
        location: ['latitude' => 40.7128, 'longitude' => -74.0060],
    );

    $gatewayRepository->shouldReceive('findById')
        ->once()
        ->with('non-existent-gateway')
        ->andReturn(null);

    $useCase = new CreateTrapUseCase($trapRepository, $gatewayRepository);

    // Act & Assert
    expect(fn () => $useCase->execute($dto))
        ->toThrow(DomainException::class, 'Gateway not found: non-existent-gateway');
});

test('it throws exception when trap with hardware_id already exists', function () {
    // Arrange
    $gatewayRepository = Mockery::mock(GatewayRepositoryInterface::class);
    $trapRepository = Mockery::mock(TrapRepositoryInterface::class);

    $gatewayId = 'gateway-123';
    $existingTrapId = 'existing-trap-456';

    $gateway = Gateway::create(
        id: $gatewayId,
        hardwareId: new HardwareId('GW001'),
        apiKey: 'test-api-key',
        name: 'Test Gateway',
        location: new Location(40.7128, -74.0060),
    );

    $existingTrap = Trap::create(
        id: $existingTrapId,
        hardwareId: new HardwareId('TRAP001'),
        gatewayId: $gatewayId,
        name: 'Existing Trap',
        type: TrapType::RAT,
        location: new Location(40.7128, -74.0060),
    );

    $dto = new CreateTrapDTO(
        hardwareId: 'TRAP001',
        gatewayId: $gatewayId,
        name: 'Test Trap',
        type: TrapType::RAT,
        status: TrapStatus::ACTIVE,
        location: ['latitude' => 40.7128, 'longitude' => -74.0060],
    );

    $gatewayRepository->shouldReceive('findById')
        ->once()
        ->with($gatewayId)
        ->andReturn($gateway);

    $trapRepository->shouldReceive('findByHardwareId')
        ->once()
        ->with('TRAP001')
        ->andReturn($existingTrap);

    $useCase = new CreateTrapUseCase($trapRepository, $gatewayRepository);

    // Act & Assert
    expect(fn () => $useCase->execute($dto))
        ->toThrow(DomainException::class, "Trap with hardware_id 'TRAP001' already exists");
});

test('it updates trap status when different from default', function () {
    // Arrange
    $gatewayRepository = Mockery::mock(GatewayRepositoryInterface::class);
    $trapRepository = Mockery::mock(TrapRepositoryInterface::class);

    $gatewayId = 'gateway-123';
    $trapId = 'trap-456';

    $gateway = Gateway::create(
        id: $gatewayId,
        hardwareId: new HardwareId('GW001'),
        apiKey: 'test-api-key',
        name: 'Test Gateway',
        location: new Location(40.7128, -74.0060),
    );

    $dto = new CreateTrapDTO(
        hardwareId: 'TRAP001',
        gatewayId: $gatewayId,
        name: 'Test Trap',
        type: TrapType::RAT,
        status: TrapStatus::MAINTENANCE,
        location: ['latitude' => 40.7128, 'longitude' => -74.0060],
    );

    $gatewayRepository->shouldReceive('findById')
        ->once()
        ->with($gatewayId)
        ->andReturn($gateway);

    $trapRepository->shouldReceive('findByHardwareId')
        ->once()
        ->with('TRAP001')
        ->andReturn(null);

    $trapRepository->shouldReceive('nextIdentity')
        ->once()
        ->andReturn($trapId);

    $trapRepository->shouldReceive('save')
        ->once()
        ->withArgs(function (Trap $trap) {
            return $trap->status() === TrapStatus::MAINTENANCE;
        });

    $useCase = new CreateTrapUseCase($trapRepository, $gatewayRepository);

    // Act
    $result = $useCase->execute($dto);

    // Assert
    expect($result->status())->toBe(TrapStatus::MAINTENANCE);
});

test('it uses correct location data', function () {
    // Arrange
    $gatewayRepository = Mockery::mock(GatewayRepositoryInterface::class);
    $trapRepository = Mockery::mock(TrapRepositoryInterface::class);

    $gatewayId = 'gateway-123';
    $trapId = 'trap-456';

    $gateway = Gateway::create(
        id: $gatewayId,
        hardwareId: new HardwareId('GW001'),
        apiKey: 'test-api-key',
        name: 'Test Gateway',
        location: new Location(40.7128, -74.0060),
    );

    $dto = new CreateTrapDTO(
        hardwareId: 'TRAP001',
        gatewayId: $gatewayId,
        name: 'Test Trap',
        type: TrapType::MOUSE,
        status: TrapStatus::ACTIVE,
        location: ['latitude' => 51.5074, 'longitude' => -0.1278], // London coordinates
    );

    $gatewayRepository->shouldReceive('findById')
        ->once()
        ->with($gatewayId)
        ->andReturn($gateway);

    $trapRepository->shouldReceive('findByHardwareId')
        ->once()
        ->with('TRAP001')
        ->andReturn(null);

    $trapRepository->shouldReceive('nextIdentity')
        ->once()
        ->andReturn($trapId);

    $trapRepository->shouldReceive('save')
        ->once()
        ->withArgs(function (Trap $trap) {
            return $trap->location()->latitude() === 51.5074
                && $trap->location()->longitude() === -0.1278;
        });

    $useCase = new CreateTrapUseCase($trapRepository, $gatewayRepository);

    // Act
    $result = $useCase->execute($dto);

    // Assert
    expect($result->location()->latitude())->toBe(51.5074)
        ->and($result->location()->longitude())->toBe(-0.1278);
});
