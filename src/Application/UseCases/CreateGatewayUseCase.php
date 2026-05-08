<?php

declare(strict_types=1);

namespace App\UseCases;

use App\DTOs\CreateGatewayDTO;
use Domain\Monitoring\Models\Gateway;
use Illuminate\Support\Str;

final readonly class CreateGatewayUseCase
{
    public function execute(CreateGatewayDTO $dto): Gateway
    {
        if (Gateway::where('hardware_id', $dto->hardwareId)->exists()) {
            throw new \DomainException("Gateway with hardware_id '{$dto->hardwareId}' already exists");
        }

        return Gateway::create([
            'hardware_id' => $dto->hardwareId,
            'api_key' => Str::random(64),
            'name' => $dto->name,
            'location' => $dto->location,
            'facility_id' => $dto->facilityId,
            'status' => $dto->status,
            'last_seen_at' => now(),
        ]);
    }
}
