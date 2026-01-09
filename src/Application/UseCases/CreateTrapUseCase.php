<?php

declare(strict_types=1);

namespace App\Application\UseCases;

use App\Application\DTOs\CreateTrapDTO;
use App\Domain\Monitoring\Entities\Trap;
use App\Domain\Monitoring\Repositories\GatewayRepositoryInterface;
use App\Domain\Monitoring\Repositories\TrapRepositoryInterface;
use App\Domain\Monitoring\ValueObjects\HardwareId;
use App\Domain\Monitoring\ValueObjects\Location;

final class CreateTrapUseCase
{
    public function __construct(
        private readonly TrapRepositoryInterface $trapRepository,
        private readonly GatewayRepositoryInterface $gatewayRepository,
    ) {}

    public function execute(CreateTrapDTO $dto): Trap
    {
        $gateway = $this->gatewayRepository->findById($dto->gatewayId);

        if ($gateway === null) {
            throw new \DomainException("Gateway not found: {$dto->gatewayId}");
        }

        $existingTrap = $this->trapRepository->findByHardwareId($dto->hardwareId);

        if ($existingTrap !== null) {
            throw new \DomainException("Trap with hardware_id '{$dto->hardwareId}' already exists");
        }

        $trap = Trap::create(
            id: $this->trapRepository->nextIdentity(),
            hardwareId: new HardwareId($dto->hardwareId),
            gatewayId: $dto->gatewayId,
            name: $dto->name,
            type: $dto->type,
            location: Location::fromArray($dto->location),
        );

        if ($dto->status !== $trap->status()) {
            $trap->updateStatus($dto->status);
        }

        $this->trapRepository->save($trap);

        return $trap;
    }
}
