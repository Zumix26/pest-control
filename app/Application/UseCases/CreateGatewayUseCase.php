<?php

declare(strict_types=1);

namespace App\Application\UseCases;

use App\Application\DTOs\CreateGatewayDTO;
use App\Domain\Monitoring\Entities\Gateway;
use App\Domain\Monitoring\Repositories\GatewayRepositoryInterface;
use App\Domain\Monitoring\ValueObjects\HardwareId;
use App\Domain\Monitoring\ValueObjects\Location;
use Illuminate\Support\Str;

final class CreateGatewayUseCase
{
    public function __construct(
        private readonly GatewayRepositoryInterface $gatewayRepository,
    ) {}

    public function execute(CreateGatewayDTO $dto): Gateway
    {
        $existingGateway = $this->gatewayRepository->findByHardwareId($dto->hardwareId);

        if ($existingGateway !== null) {
            throw new \DomainException("Gateway with hardware_id '{$dto->hardwareId}' already exists");
        }

        $gateway = Gateway::create(
            id: $this->gatewayRepository->nextIdentity(),
            hardwareId: new HardwareId($dto->hardwareId),
            apiKey: Str::random(64),
            name: $dto->name,
            location: Location::fromArray($dto->location),
        );

        if ($dto->status !== $gateway->status()) {
            $gateway->updateStatus($dto->status);
        }

        $this->gatewayRepository->save($gateway);

        return $gateway;
    }
}
