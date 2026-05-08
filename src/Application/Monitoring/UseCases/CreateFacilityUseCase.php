<?php

declare(strict_types=1);

namespace App\Monitoring\UseCases;

use App\DTOs\CreateFacilityDTO;
use Domain\Monitoring\Models\Facility;
use Illuminate\Support\Facades\DB;

final class CreateFacilityUseCase
{
    public function execute(CreateFacilityDTO $dto): Facility
    {
        return DB::transaction(fn () => Facility::create([
            'name' => $dto->name,
            'address' => $dto->address,
            'contact_person' => $dto->contactPerson,
            'contact_phone' => $dto->contactPhone,
            'type' => $dto->type,
            'area' => $dto->area,
            'description' => $dto->description,
            'status' => $dto->status,
            'customer_id' => $dto->customerId,
        ]));
    }
}
