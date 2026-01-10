<?php

declare(strict_types=1);

use App\Application\DTOs\CreateGatewayDTO;
use App\Application\UseCases\CreateGatewayUseCase;
use App\Domain\Monitoring\Entities\Gateway;
use App\Domain\Monitoring\Enums\GatewayStatus;
use App\Domain\Monitoring\Repositories\GatewayRepositoryInterface;
use Illuminate\Support\Str;

test('it creates a gateway successfully', function () {
    // Arrange
    $gatewayRepository = Mockery::mock(GatewayRepositoryInterface::class);
    $gatewayId = 'gateway-123';
    $apiKey = 'test-api-key-1234567890abcdefghijklmnopqrstuvwxyz1234567890ab';

    Str::createRandomStringsUsing(fn () => $apiKey);

    $dto = new CreateGatewayDTO(
        hardwareId: 'GW001',
        name: 'Main Gateway',
        location: ['latitude' => 40.7128, 'longitude' => -74.0060],
        status: GatewayStatus::ONLINE,
    );

    $gatewayRepository->shouldReceive('findByHardwareId')
        ->once()
        ->with('GW001')
        ->andReturn(null);

    $gatewayRepository->shouldReceive('nextIdentity')
        ->once()
        ->andReturn($gatewayId);

    $gatewayRepository->shouldReceive('save')
        ->once()
        ->withArgs(function (Gateway $gateway) use ($gatewayId, $apiKey) {
            return $gateway->id() === $gatewayId
                && $gateway->hardwareId()->value() === 'GW001'
                && $gateway->name() === 'Main Gateway'
                && $gateway->apiKey() === $apiKey
                && $gateway->status() === GatewayStatus::ONLINE;
        });

    $useCase = new CreateGatewayUseCase($gatewayRepository);

    // Act
    $result = $useCase->execute($dto);

    // Assert
    expect($result)->toBeInstanceOf(Gateway::class)
        ->and($result->id())->toBe($gatewayId)
        ->and($result->hardwareId()->value())->toBe('GW001')
        ->and($result->name())->toBe('Main Gateway')
        ->and($result->apiKey())->toBe($apiKey)
        ->and($result->status())->toBe(GatewayStatus::ONLINE);

    Str::createRandomStringsNormally();
});

test('it throws exception when gateway with hardware_id already exists', function () {
    // Arrange
    $gatewayRepository = Mockery::mock(GatewayRepositoryInterface::class);

    $existingGateway = Gateway::fromPrimitives(
        id: 'existing-gateway-123',
        hardwareId: 'GW001',
        apiKey: 'existing-api-key',
        name: 'Existing Gateway',
        location: ['latitude' => 40.7128, 'longitude' => -74.0060],
        status: 'online',
        lastSeenAt: new DateTimeImmutable()->format('Y-m-d H:i:s'),
        createdAt: new DateTimeImmutable()->format('Y-m-d H:i:s'),
        updatedAt: new DateTimeImmutable()->format('Y-m-d H:i:s'),
    );

    $dto = new CreateGatewayDTO(
        hardwareId: 'GW001',
        name: 'New Gateway',
        location: ['latitude' => 40.7128, 'longitude' => -74.0060],
        status: GatewayStatus::ONLINE,
    );

    $gatewayRepository->shouldReceive('findByHardwareId')
        ->once()
        ->with('GW001')
        ->andReturn($existingGateway);

    $useCase = new CreateGatewayUseCase($gatewayRepository);

    // Act & Assert
    expect(fn () => $useCase->execute($dto))
        ->toThrow(DomainException::class, "Gateway with hardware_id 'GW001' already exists");
});

test('it generates a unique api key', function () {
    // Arrange
    $gatewayRepository = Mockery::mock(GatewayRepositoryInterface::class);
    $gatewayId = 'gateway-123';
    $apiKey = 'a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6a7b8c9d0e1f2';

    Str::createRandomStringsUsing(fn () => $apiKey);

    $dto = new CreateGatewayDTO(
        hardwareId: 'GW001',
        name: 'Test Gateway',
        location: ['latitude' => 40.7128, 'longitude' => -74.0060],
        status: GatewayStatus::ONLINE,
    );

    $gatewayRepository->shouldReceive('findByHardwareId')
        ->once()
        ->with('GW001')
        ->andReturn(null);

    $gatewayRepository->shouldReceive('nextIdentity')
        ->once()
        ->andReturn($gatewayId);

    $gatewayRepository->shouldReceive('save')
        ->once()
        ->withArgs(function (Gateway $gateway) use ($apiKey) {
            return $gateway->apiKey() === $apiKey
                && strlen($gateway->apiKey()) === 64;
        });

    $useCase = new CreateGatewayUseCase($gatewayRepository);

    // Act
    $result = $useCase->execute($dto);

    // Assert
    expect($result->apiKey())->toBe($apiKey)
        ->and($result->apiKey())->toHaveLength(64);

    Str::createRandomStringsNormally();
});

test('it updates gateway status when different from default', function () {
    // Arrange
    $gatewayRepository = Mockery::mock(GatewayRepositoryInterface::class);
    $gatewayId = 'gateway-123';
    $apiKey = 'test-api-key';

    Str::createRandomStringsUsing(fn () => $apiKey);

    $dto = new CreateGatewayDTO(
        hardwareId: 'GW001',
        name: 'Test Gateway',
        location: ['latitude' => 40.7128, 'longitude' => -74.0060],
        status: GatewayStatus::MAINTENANCE, // Different from default ONLINE
    );

    $gatewayRepository->shouldReceive('findByHardwareId')
        ->once()
        ->with('GW001')
        ->andReturn(null);

    $gatewayRepository->shouldReceive('nextIdentity')
        ->once()
        ->andReturn($gatewayId);

    $gatewayRepository->shouldReceive('save')
        ->once()
        ->withArgs(function (Gateway $gateway) {
            return $gateway->status() === GatewayStatus::MAINTENANCE;
        });

    $useCase = new CreateGatewayUseCase($gatewayRepository);

    // Act
    $result = $useCase->execute($dto);

    // Assert
    expect($result->status())->toBe(GatewayStatus::MAINTENANCE);

    Str::createRandomStringsNormally();
});

test('it uses correct location data', function () {
    // Arrange
    $gatewayRepository = Mockery::mock(GatewayRepositoryInterface::class);
    $gatewayId = 'gateway-123';
    $apiKey = 'test-api-key';

    Str::createRandomStringsUsing(fn () => $apiKey);

    $dto = new CreateGatewayDTO(
        hardwareId: 'GW001',
        name: 'London Gateway',
        location: ['latitude' => 51.5074, 'longitude' => -0.1278], // London coordinates
        status: GatewayStatus::ONLINE,
    );

    $gatewayRepository->shouldReceive('findByHardwareId')
        ->once()
        ->with('GW001')
        ->andReturn(null);

    $gatewayRepository->shouldReceive('nextIdentity')
        ->once()
        ->andReturn($gatewayId);

    $gatewayRepository->shouldReceive('save')
        ->once()
        ->withArgs(function (Gateway $gateway) {
            return $gateway->location()->latitude() === 51.5074
                && $gateway->location()->longitude() === -0.1278;
        });

    $useCase = new CreateGatewayUseCase($gatewayRepository);

    // Act
    $result = $useCase->execute($dto);

    // Assert
    expect($result->location()->latitude())->toBe(51.5074)
        ->and($result->location()->longitude())->toBe(-0.1278);

    Str::createRandomStringsNormally();
});

test('it creates gateway with offline status', function () {
    // Arrange
    $gatewayRepository = Mockery::mock(GatewayRepositoryInterface::class);
    $gatewayId = 'gateway-123';
    $apiKey = 'test-api-key';

    Str::createRandomStringsUsing(fn () => $apiKey);

    $dto = new CreateGatewayDTO(
        hardwareId: 'GW001',
        name: 'Offline Gateway',
        location: ['latitude' => 40.7128, 'longitude' => -74.0060],
        status: GatewayStatus::OFFLINE,
    );

    $gatewayRepository->shouldReceive('findByHardwareId')
        ->once()
        ->with('GW001')
        ->andReturn(null);

    $gatewayRepository->shouldReceive('nextIdentity')
        ->once()
        ->andReturn($gatewayId);

    $gatewayRepository->shouldReceive('save')
        ->once()
        ->withArgs(function (Gateway $gateway) {
            return $gateway->status() === GatewayStatus::OFFLINE
                && $gateway->status()->isAvailable() === false;
        });

    $useCase = new CreateGatewayUseCase($gatewayRepository);

    // Act
    $result = $useCase->execute($dto);

    // Assert
    expect($result->status())->toBe(GatewayStatus::OFFLINE)
        ->and($result->status()->isAvailable())->toBeFalse();

    Str::createRandomStringsNormally();
});

test('it creates gateway with default online status', function () {
    // Arrange
    $gatewayRepository = Mockery::mock(GatewayRepositoryInterface::class);
    $gatewayId = 'gateway-123';
    $apiKey = 'test-api-key';

    Str::createRandomStringsUsing(fn () => $apiKey);

    $dto = new CreateGatewayDTO(
        hardwareId: 'GW001',
        name: 'Test Gateway',
        location: ['latitude' => 40.7128, 'longitude' => -74.0060],
        status: GatewayStatus::ONLINE, // Same as default
    );

    $gatewayRepository->shouldReceive('findByHardwareId')
        ->once()
        ->with('GW001')
        ->andReturn(null);

    $gatewayRepository->shouldReceive('nextIdentity')
        ->once()
        ->andReturn($gatewayId);

    $gatewayRepository->shouldReceive('save')
        ->once()
        ->withArgs(function (Gateway $gateway) {
            return $gateway->status() === GatewayStatus::ONLINE
                && $gateway->status()->isAvailable() === true;
        });

    $useCase = new CreateGatewayUseCase($gatewayRepository);

    // Act
    $result = $useCase->execute($dto);

    // Assert
    expect($result->status())->toBe(GatewayStatus::ONLINE)
        ->and($result->status()->isAvailable())->toBeTrue();

    Str::createRandomStringsNormally();
});

test('it creates gateway with valid hardware id format', function () {
    // Arrange
    $gatewayRepository = Mockery::mock(GatewayRepositoryInterface::class);
    $gatewayId = 'gateway-123';
    $apiKey = 'test-api-key';

    Str::createRandomStringsUsing(fn () => $apiKey);

    $dto = new CreateGatewayDTO(
        hardwareId: 'GW-2025-001',
        name: 'Test Gateway',
        location: ['latitude' => 40.7128, 'longitude' => -74.0060],
        status: GatewayStatus::ONLINE,
    );

    $gatewayRepository->shouldReceive('findByHardwareId')
        ->once()
        ->with('GW-2025-001')
        ->andReturn(null);

    $gatewayRepository->shouldReceive('nextIdentity')
        ->once()
        ->andReturn($gatewayId);

    $gatewayRepository->shouldReceive('save')
        ->once()
        ->withArgs(function (Gateway $gateway) {
            return $gateway->hardwareId()->value() === 'GW-2025-001';
        });

    $useCase = new CreateGatewayUseCase($gatewayRepository);

    // Act
    $result = $useCase->execute($dto);

    // Assert
    expect($result->hardwareId()->value())->toBe('GW-2025-001');

    Str::createRandomStringsNormally();
});

test('it initializes gateway with current timestamp', function () {
    // Arrange
    $gatewayRepository = Mockery::mock(GatewayRepositoryInterface::class);
    $gatewayId = 'gateway-123';
    $apiKey = 'test-api-key';

    Str::createRandomStringsUsing(fn () => $apiKey);

    $beforeCreate = new DateTimeImmutable();

    $dto = new CreateGatewayDTO(
        hardwareId: 'GW001',
        name: 'Test Gateway',
        location: ['latitude' => 40.7128, 'longitude' => -74.0060],
        status: GatewayStatus::ONLINE,
    );

    $gatewayRepository->shouldReceive('findByHardwareId')
        ->once()
        ->with('GW001')
        ->andReturn(null);

    $gatewayRepository->shouldReceive('nextIdentity')
        ->once()
        ->andReturn($gatewayId);

    $gatewayRepository->shouldReceive('save')
        ->once();

    $useCase = new CreateGatewayUseCase($gatewayRepository);

    // Act
    $result = $useCase->execute($dto);
    $afterCreate = new DateTimeImmutable();

    // Assert
    expect($result->createdAt())->toBeInstanceOf(DateTimeImmutable::class)
        ->and($result->createdAt()->getTimestamp())->toBeGreaterThanOrEqual($beforeCreate->getTimestamp())
        ->and($result->createdAt()->getTimestamp())->toBeLessThanOrEqual($afterCreate->getTimestamp())
        ->and($result->updatedAt())->toBeInstanceOf(DateTimeImmutable::class)
        ->and($result->lastSeenAt())->toBeInstanceOf(DateTimeImmutable::class);

    Str::createRandomStringsNormally();
});
