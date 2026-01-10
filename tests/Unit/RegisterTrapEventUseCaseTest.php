<?php

declare(strict_types=1);

use App\Application\DTOs\TrapEventDTO;
use App\Application\UseCases\RegisterTrapEventUseCase;
use App\Domain\Monitoring\Entities\Trap;
use App\Domain\Monitoring\Entities\TrapEvent;
use App\Domain\Monitoring\Enums\TrapType;
use App\Domain\Monitoring\Repositories\TrapEventRepositoryInterface;
use App\Domain\Monitoring\Repositories\TrapRepositoryInterface;
use App\Domain\Monitoring\ValueObjects\BatteryLevel;
use App\Domain\Monitoring\ValueObjects\HardwareId;
use App\Domain\Monitoring\ValueObjects\Location;
use Illuminate\Support\Facades\DB;

beforeEach(function () {
    DB::shouldReceive('transaction')
        ->andReturnUsing(function ($callback) {
            return $callback();
        });
});

test('it registers a trap event successfully', function () {
    // Arrange
    $trapRepository = Mockery::mock(TrapRepositoryInterface::class);
    $trapEventRepository = Mockery::mock(TrapEventRepositoryInterface::class);

    $trapId = 'trap-123';
    $eventId = 'event-456';
    $caughtAt = new DateTimeImmutable('2025-01-10 12:00:00');

    $trap = Trap::create(
        id: $trapId,
        hardwareId: new HardwareId('TRAP001'),
        gatewayId: 'gateway-123',
        name: 'Test Trap',
        type: TrapType::RAT,
        location: new Location(40.7128, -74.0060),
    );

    $dto = new TrapEventDTO(
        trapId: $trapId,
        caughtAt: $caughtAt,
        batteryLevel: 85,
        rssi: -65,
        metadata: ['sensor' => 'infrared', 'temperature' => 22],
    );

    $trapRepository->shouldReceive('findById')
        ->once()
        ->with($trapId)
        ->andReturn($trap);

    $trapEventRepository->shouldReceive('nextIdentity')
        ->once()
        ->andReturn($eventId);

    $trapEventRepository->shouldReceive('save')
        ->once()
        ->withArgs(function (TrapEvent $event) use ($eventId, $trapId, $caughtAt) {
            return $event->id() === $eventId
                && $event->trapId() === $trapId
                && $event->caughtAt() == $caughtAt
                && $event->batteryLevel()->value() === 85
                && $event->signalStrength()->rssi() === -65
                && $event->metadata() === ['sensor' => 'infrared', 'temperature' => 22];
        });

    $trapRepository->shouldReceive('save')
        ->once()
        ->withArgs(function (Trap $updatedTrap) use ($trapId) {
            return $updatedTrap->id() === $trapId
                && $updatedTrap->totalCatches() === 1
                && $updatedTrap->batteryLevel()->value() === 85
                && $updatedTrap->lastEventAt() !== null;
        });

    $useCase = new RegisterTrapEventUseCase($trapRepository, $trapEventRepository);

    // Act
    $result = $useCase->execute($dto);

    // Assert
    expect($result)->toBeInstanceOf(TrapEvent::class)
        ->and($result->id())->toBe($eventId)
        ->and($result->trapId())->toBe($trapId)
        ->and($result->batteryLevel()->value())->toBe(85)
        ->and($result->signalStrength()->rssi())->toBe(-65)
        ->and($result->metadata())->toBe(['sensor' => 'infrared', 'temperature' => 22]);
});

test('it throws exception when trap not found', function () {
    // Arrange
    $trapRepository = Mockery::mock(TrapRepositoryInterface::class);
    $trapEventRepository = Mockery::mock(TrapEventRepositoryInterface::class);

    $dto = new TrapEventDTO(
        trapId: 'non-existent-trap',
        caughtAt: new DateTimeImmutable('2025-01-10 12:00:00'),
        batteryLevel: 85,
        rssi: -65,
        metadata: [],
    );

    $trapRepository->shouldReceive('findById')
        ->once()
        ->with('non-existent-trap')
        ->andReturn(null);

    $useCase = new RegisterTrapEventUseCase($trapRepository, $trapEventRepository);

    // Act & Assert
    expect(fn () => $useCase->execute($dto))
        ->toThrow(DomainException::class, 'Trap not found: non-existent-trap');
});

test('it updates trap total catches', function () {
    // Arrange
    $trapRepository = Mockery::mock(TrapRepositoryInterface::class);
    $trapEventRepository = Mockery::mock(TrapEventRepositoryInterface::class);

    $trapId = 'trap-123';
    $eventId = 'event-456';

    $trap = Trap::create(
        id: $trapId,
        hardwareId: new HardwareId('TRAP001'),
        gatewayId: 'gateway-123',
        name: 'Test Trap',
        type: TrapType::RAT,
        location: new Location(40.7128, -74.0060),
    );

    // Simulate previous catches
    $trap->trigger(new DateTimeImmutable('-1 hour'), new BatteryLevel(90));
    $trap->trigger(new DateTimeImmutable('-30 minutes'), new BatteryLevel(88));

    expect($trap->totalCatches())->toBe(2);

    $dto = new TrapEventDTO(
        trapId: $trapId,
        caughtAt: new DateTimeImmutable('2025-01-10 12:00:00'),
        batteryLevel: 85,
        rssi: -65,
        metadata: [],
    );

    $trapRepository->shouldReceive('findById')
        ->once()
        ->with($trapId)
        ->andReturn($trap);

    $trapEventRepository->shouldReceive('nextIdentity')
        ->once()
        ->andReturn($eventId);

    $trapEventRepository->shouldReceive('save')
        ->once();

    $trapRepository->shouldReceive('save')
        ->once()
        ->withArgs(function (Trap $updatedTrap) {
            return $updatedTrap->totalCatches() === 3;
        });

    $useCase = new RegisterTrapEventUseCase($trapRepository, $trapEventRepository);

    // Act
    $result = $useCase->execute($dto);

    // Assert
    expect($result)->toBeInstanceOf(TrapEvent::class);
});

test('it updates trap battery level', function () {
    // Arrange
    $trapRepository = Mockery::mock(TrapRepositoryInterface::class);
    $trapEventRepository = Mockery::mock(TrapEventRepositoryInterface::class);

    $trapId = 'trap-123';
    $eventId = 'event-456';

    $trap = Trap::create(
        id: $trapId,
        hardwareId: new HardwareId('TRAP001'),
        gatewayId: 'gateway-123',
        name: 'Test Trap',
        type: TrapType::RAT,
        location: new Location(40.7128, -74.0060),
    );

    expect($trap->batteryLevel()->value())->toBe(100); // Initial battery level

    $dto = new TrapEventDTO(
        trapId: $trapId,
        caughtAt: new DateTimeImmutable('2025-01-10 12:00:00'),
        batteryLevel: 45,
        rssi: -65,
        metadata: [],
    );

    $trapRepository->shouldReceive('findById')
        ->once()
        ->with($trapId)
        ->andReturn($trap);

    $trapEventRepository->shouldReceive('nextIdentity')
        ->once()
        ->andReturn($eventId);

    $trapEventRepository->shouldReceive('save')
        ->once();

    $trapRepository->shouldReceive('save')
        ->once()
        ->withArgs(function (Trap $updatedTrap) {
            return $updatedTrap->batteryLevel()->value() === 45;
        });

    $useCase = new RegisterTrapEventUseCase($trapRepository, $trapEventRepository);

    // Act
    $result = $useCase->execute($dto);

    // Assert
    expect($result)->toBeInstanceOf(TrapEvent::class)
        ->and($result->batteryLevel()->value())->toBe(45);
});

test('it updates trap last event timestamp', function () {
    // Arrange
    $trapRepository = Mockery::mock(TrapRepositoryInterface::class);
    $trapEventRepository = Mockery::mock(TrapEventRepositoryInterface::class);

    $trapId = 'trap-123';
    $eventId = 'event-456';
    $caughtAt = new DateTimeImmutable('2025-01-10 12:00:00');

    $trap = Trap::create(
        id: $trapId,
        hardwareId: new HardwareId('TRAP001'),
        gatewayId: 'gateway-123',
        name: 'Test Trap',
        type: TrapType::RAT,
        location: new Location(40.7128, -74.0060),
    );

    expect($trap->lastEventAt())->toBeNull(); // No events yet

    $dto = new TrapEventDTO(
        trapId: $trapId,
        caughtAt: $caughtAt,
        batteryLevel: 85,
        rssi: -65,
        metadata: [],
    );

    $trapRepository->shouldReceive('findById')
        ->once()
        ->with($trapId)
        ->andReturn($trap);

    $trapEventRepository->shouldReceive('nextIdentity')
        ->once()
        ->andReturn($eventId);

    $trapEventRepository->shouldReceive('save')
        ->once();

    $trapRepository->shouldReceive('save')
        ->once()
        ->withArgs(function (Trap $updatedTrap) use ($caughtAt) {
            return $updatedTrap->lastEventAt() !== null
                && $updatedTrap->lastEventAt()->getTimestamp() === $caughtAt->getTimestamp();
        });

    $useCase = new RegisterTrapEventUseCase($trapRepository, $trapEventRepository);

    // Act
    $result = $useCase->execute($dto);

    // Assert
    expect($result)->toBeInstanceOf(TrapEvent::class);
});

test('it preserves metadata in trap event', function () {
    // Arrange
    $trapRepository = Mockery::mock(TrapRepositoryInterface::class);
    $trapEventRepository = Mockery::mock(TrapEventRepositoryInterface::class);

    $trapId = 'trap-123';
    $eventId = 'event-456';

    $trap = Trap::create(
        id: $trapId,
        hardwareId: new HardwareId('TRAP001'),
        gatewayId: 'gateway-123',
        name: 'Test Trap',
        type: TrapType::RAT,
        location: new Location(40.7128, -74.0060),
    );

    $metadata = [
        'sensor' => 'infrared',
        'temperature' => 22,
        'humidity' => 65,
        'weight' => 350,
    ];

    $dto = new TrapEventDTO(
        trapId: $trapId,
        caughtAt: new DateTimeImmutable('2025-01-10 12:00:00'),
        batteryLevel: 85,
        rssi: -65,
        metadata: $metadata,
    );

    $trapRepository->shouldReceive('findById')
        ->once()
        ->with($trapId)
        ->andReturn($trap);

    $trapEventRepository->shouldReceive('nextIdentity')
        ->once()
        ->andReturn($eventId);

    $trapEventRepository->shouldReceive('save')
        ->once()
        ->withArgs(function (TrapEvent $event) use ($metadata) {
            return $event->metadata() === $metadata;
        });

    $trapRepository->shouldReceive('save')
        ->once();

    $useCase = new RegisterTrapEventUseCase($trapRepository, $trapEventRepository);

    // Act
    $result = $useCase->execute($dto);

    // Assert
    expect($result->metadata())->toBe($metadata);
});

test('it creates event with low battery level', function () {
    // Arrange
    $trapRepository = Mockery::mock(TrapRepositoryInterface::class);
    $trapEventRepository = Mockery::mock(TrapEventRepositoryInterface::class);

    $trapId = 'trap-123';
    $eventId = 'event-456';

    $trap = Trap::create(
        id: $trapId,
        hardwareId: new HardwareId('TRAP001'),
        gatewayId: 'gateway-123',
        name: 'Test Trap',
        type: TrapType::RAT,
        location: new Location(40.7128, -74.0060),
    );

    $dto = new TrapEventDTO(
        trapId: $trapId,
        caughtAt: new DateTimeImmutable('2025-01-10 12:00:00'),
        batteryLevel: 15, // Low battery
        rssi: -65,
        metadata: [],
    );

    $trapRepository->shouldReceive('findById')
        ->once()
        ->with($trapId)
        ->andReturn($trap);

    $trapEventRepository->shouldReceive('nextIdentity')
        ->once()
        ->andReturn($eventId);

    $trapEventRepository->shouldReceive('save')
        ->once();

    $trapRepository->shouldReceive('save')
        ->once()
        ->withArgs(function (Trap $updatedTrap) {
            return $updatedTrap->isLowBattery() === true;
        });

    $useCase = new RegisterTrapEventUseCase($trapRepository, $trapEventRepository);

    // Act
    $result = $useCase->execute($dto);

    // Assert
    expect($result->batteryLevel()->value())->toBe(15)
        ->and($result->batteryLevel()->isLow())->toBeTrue();
});

test('it creates event with weak signal strength', function () {
    // Arrange
    $trapRepository = Mockery::mock(TrapRepositoryInterface::class);
    $trapEventRepository = Mockery::mock(TrapEventRepositoryInterface::class);

    $trapId = 'trap-123';
    $eventId = 'event-456';

    $trap = Trap::create(
        id: $trapId,
        hardwareId: new HardwareId('TRAP001'),
        gatewayId: 'gateway-123',
        name: 'Test Trap',
        type: TrapType::RAT,
        location: new Location(40.7128, -74.0060),
    );

    $dto = new TrapEventDTO(
        trapId: $trapId,
        caughtAt: new DateTimeImmutable('2025-01-10 12:00:00'),
        batteryLevel: 85,
        rssi: -95, // Weak signal
        metadata: [],
    );

    $trapRepository->shouldReceive('findById')
        ->once()
        ->with($trapId)
        ->andReturn($trap);

    $trapEventRepository->shouldReceive('nextIdentity')
        ->once()
        ->andReturn($eventId);

    $trapEventRepository->shouldReceive('save')
        ->once()
        ->withArgs(function (TrapEvent $event) {
            return $event->hasWeakSignal() === true;
        });

    $trapRepository->shouldReceive('save')
        ->once();

    $useCase = new RegisterTrapEventUseCase($trapRepository, $trapEventRepository);

    // Act
    $result = $useCase->execute($dto);

    // Assert
    expect($result->signalStrength()->rssi())->toBe(-95)
        ->and($result->hasWeakSignal())->toBeTrue()
        ->and($result->signalStrength()->quality())->toBe('very_poor');
});
