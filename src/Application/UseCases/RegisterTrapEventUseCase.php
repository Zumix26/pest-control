<?php

declare(strict_types=1);

namespace App\UseCases;

use App\DTOs\TrapEventDTO;
use Domain\Monitoring\Events\TrapTriggered;
use Domain\Monitoring\Models\Trap;
use Domain\Monitoring\Models\TrapEvent;
use Illuminate\Support\Facades\DB;

final readonly class RegisterTrapEventUseCase
{
    public function execute(TrapEventDTO $dto): TrapEvent
    {
        return DB::transaction(function () use ($dto) {
            $trap = Trap::find($dto->trapId);

            if ($trap === null) {
                throw new \DomainException("Trap not found: {$dto->trapId}");
            }

            $event = TrapEvent::create([
                'trap_id' => $dto->trapId,
                'caught_at' => $dto->caughtAt,
                'battery_level' => $dto->batteryLevel,
                'rssi' => $dto->rssi,
                'metadata' => $dto->metadata,
            ]);

            $trap->trigger($dto->caughtAt, $dto->batteryLevel);

            event(new TrapTriggered(
                trapId: $trap->id,
                trapEventId: $event->id,
                trapName: $trap->name,
                gatewayId: $trap->gateway_id,
                batteryLevel: $trap->battery_level,
                totalCatches: $trap->total_catches,
                caughtAt: $event->caught_at->format('Y-m-d\TH:i:s\Z'),
                trapEvent: $event,
            ));

            return $event;
        });
    }
}
