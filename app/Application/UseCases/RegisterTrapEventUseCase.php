<?php

declare(strict_types=1);

namespace App\Application\UseCases;

use App\Application\DTOs\TrapEventDTO;
use App\Domain\Monitoring\Entities\TrapEvent;
use App\Domain\Monitoring\Repositories\TrapEventRepositoryInterface;
use App\Domain\Monitoring\Repositories\TrapRepositoryInterface;
use App\Domain\Monitoring\ValueObjects\BatteryLevel;
use App\Domain\Monitoring\ValueObjects\SignalStrength;
use Illuminate\Support\Facades\DB;

final class RegisterTrapEventUseCase
{
    public function __construct(
        private readonly TrapRepositoryInterface $trapRepository,
        private readonly TrapEventRepositoryInterface $trapEventRepository,
    ) {}

    public function execute(TrapEventDTO $dto): TrapEvent
    {
        return DB::transaction(function () use ($dto) {
            $trap = $this->trapRepository->findById($dto->trapId);

            if ($trap === null) {
                throw new \DomainException("Trap not found: {$dto->trapId}");
            }

            $event = TrapEvent::create(
                id: $this->trapEventRepository->nextIdentity(),
                trapId: $dto->trapId,
                caughtAt: $dto->caughtAt,
                batteryLevel: new BatteryLevel($dto->batteryLevel),
                signalStrength: new SignalStrength($dto->rssi),
                metadata: $dto->metadata,
            );

            $this->trapEventRepository->save($event);

            $trap->trigger($dto->caughtAt, new BatteryLevel($dto->batteryLevel));
            $this->trapRepository->save($trap);

            return $event;
        });
    }
}
