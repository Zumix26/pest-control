<?php

declare(strict_types=1);

use App\Application\DTOs\TrapEventDTO;
use App\Application\UseCases\RegisterTrapEventUseCase;
use App\Domain\Monitoring\Enums\GatewayStatus;
use App\Domain\Monitoring\Enums\TrapStatus;
use App\Domain\Monitoring\Enums\TrapType;
use App\Domain\Monitoring\Models\Gateway;
use App\Domain\Monitoring\Models\Trap;
use App\Domain\Monitoring\Models\TrapEvent;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;

uses(RefreshDatabase::class);

function makeTrap(): Trap
{
    $gateway = Gateway::create([
        'hardware_id' => 'GW001',
        'api_key' => 'test-api-key-64chars-padded-to-fill-the-required-length-here',
        'name' => 'Test Gateway',
        'location' => ['latitude' => 0, 'longitude' => 0],
        'status' => GatewayStatus::ONLINE,
        'last_seen_at' => now(),
    ]);

    return Trap::create([
        'hardware_id' => 'TRAP001',
        'gateway_id' => $gateway->id,
        'name' => 'Test Trap',
        'type' => TrapType::RAT,
        'status' => TrapStatus::ACTIVE,
        'location' => ['latitude' => 0, 'longitude' => 0],
        'battery_level' => 100,
        'total_catches' => 0,
    ]);
}

test('it registers a trap event successfully', function () {
    Event::fake();
    $trap = makeTrap();
    $caughtAt = new DateTimeImmutable('2025-01-10 12:00:00');

    $dto = new TrapEventDTO(
        trapId: $trap->id,
        caughtAt: $caughtAt,
        batteryLevel: 85,
        rssi: -65,
        metadata: ['sensor' => 'infrared'],
    );

    $event = (new RegisterTrapEventUseCase())->execute($dto);

    expect($event)->toBeInstanceOf(TrapEvent::class)
        ->and($event->trap_id)->toBe($trap->id)
        ->and($event->battery_level)->toBe(85)
        ->and($event->rssi)->toBe(-65)
        ->and($event->metadata)->toBe(['sensor' => 'infrared']);

    $this->assertDatabaseHas('trap_events', ['trap_id' => $trap->id, 'battery_level' => 85]);
});

test('it throws exception when trap not found', function () {
    $dto = new TrapEventDTO(
        trapId: 'non-existent-trap',
        caughtAt: new DateTimeImmutable(),
        batteryLevel: 85,
        rssi: -65,
        metadata: [],
    );

    expect(fn () => (new RegisterTrapEventUseCase())->execute($dto))
        ->toThrow(DomainException::class, 'Trap not found: non-existent-trap');
});

test('it increments trap total catches', function () {
    Event::fake();
    $trap = makeTrap();
    expect($trap->total_catches)->toBe(0);

    $dto = new TrapEventDTO(
        trapId: $trap->id,
        caughtAt: new DateTimeImmutable(),
        batteryLevel: 85,
        rssi: -65,
        metadata: [],
    );

    (new RegisterTrapEventUseCase())->execute($dto);

    expect($trap->fresh()->total_catches)->toBe(1);
});

test('it updates trap battery level', function () {
    Event::fake();
    $trap = makeTrap();
    expect($trap->battery_level)->toBe(100);

    $dto = new TrapEventDTO(
        trapId: $trap->id,
        caughtAt: new DateTimeImmutable(),
        batteryLevel: 45,
        rssi: -65,
        metadata: [],
    );

    (new RegisterTrapEventUseCase())->execute($dto);

    expect($trap->fresh()->battery_level)->toBe(45);
});

test('it updates trap last event timestamp', function () {
    Event::fake();
    $trap = makeTrap();
    expect($trap->last_event_at)->toBeNull();

    $caughtAt = new DateTimeImmutable('2025-01-10 12:00:00');
    $dto = new TrapEventDTO(
        trapId: $trap->id,
        caughtAt: $caughtAt,
        batteryLevel: 85,
        rssi: -65,
        metadata: [],
    );

    (new RegisterTrapEventUseCase())->execute($dto);

    expect($trap->fresh()->last_event_at)->not->toBeNull();
});

test('it correctly identifies weak signal', function () {
    $trap = makeTrap();

    $dto = new TrapEventDTO(
        trapId: $trap->id,
        caughtAt: new DateTimeImmutable(),
        batteryLevel: 85,
        rssi: -95,
        metadata: [],
    );

    Event::fake();
    $event = (new RegisterTrapEventUseCase())->execute($dto);

    expect($event->hasWeakSignal())->toBeTrue()
        ->and($event->signalQuality())->toBe('very_poor');
});

test('it correctly identifies low battery', function () {
    $trap = makeTrap();

    $dto = new TrapEventDTO(
        trapId: $trap->id,
        caughtAt: new DateTimeImmutable(),
        batteryLevel: 15,
        rssi: -65,
        metadata: [],
    );

    Event::fake();
    (new RegisterTrapEventUseCase())->execute($dto);

    expect($trap->fresh()->isLowBattery())->toBeTrue();
});
