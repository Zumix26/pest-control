<?php

declare(strict_types=1);

namespace App\Application\UseCases;

use App\Application\DTOs\CreateTrapDTO;
use App\Domain\Monitoring\Models\Gateway;
use App\Domain\Monitoring\Models\Trap;

final class CreateTrapUseCase
{
    public function execute(CreateTrapDTO $dto): Trap
    {
        if (Gateway::find($dto->gatewayId) === null) {
            throw new \DomainException("Gateway not found: {$dto->gatewayId}");
        }

        if (Trap::where('hardware_id', $dto->hardwareId)->exists()) {
            throw new \DomainException("Trap with hardware_id '{$dto->hardwareId}' already exists");
        }

        return Trap::create([
            'hardware_id' => $dto->hardwareId,
            'gateway_id' => $dto->gatewayId,
            'name' => $dto->name,
            'type' => $dto->type,
            'status' => $dto->status,
            'location' => $dto->location,
            'battery_level' => 100,
            'total_catches' => 0,
        ]);
    }
}
