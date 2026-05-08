<?php

declare(strict_types=1);

namespace App\Monitoring\UseCases\Facilities;

use Domain\Monitoring\Models\Facility;
use Domain\Monitoring\Models\Gateway;
use DomainException;
use Illuminate\Support\Facades\DB;

final class DeleteFacilityUseCase
{
    public function execute(string $id): void
    {
        DB::transaction(function () use ($id) {
            $facility = Facility::find($id);

            if ($facility === null) {
                throw new DomainException("Facility with id '{$id}' not found");
            }

            Gateway::where('facility_id', $id)->update(['facility_id' => null]);

            $facility->delete();
        });
    }
}
