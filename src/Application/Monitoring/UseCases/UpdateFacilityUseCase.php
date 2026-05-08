<?php

declare(strict_types=1);

namespace App\Monitoring\UseCases;

use App\DTOs\UpdateFacilityDTO;
use Domain\Monitoring\Models\Facility;
use DomainException;
use Illuminate\Support\Facades\DB;

final class UpdateFacilityUseCase
{
    public function execute(UpdateFacilityDTO $dto): Facility
    {
        return DB::transaction(function () use ($dto) {
            $facility = Facility::find($dto->id);

            if ($facility === null) {
                throw new DomainException("Facility with id '{$dto->id}' not found");
            }

            $facility->update([
                'name' => $dto->name,
                'address' => $dto->address,
                'contact_person' => $dto->contactPerson,
                'contact_phone' => $dto->contactPhone,
                'type' => $dto->type,
                'area' => $dto->area,
                'description' => $dto->description,
                'status' => $dto->status,
            ]);

            return $facility->fresh();
        });
    }
}
