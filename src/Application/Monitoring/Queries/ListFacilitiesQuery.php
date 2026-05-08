<?php

declare(strict_types=1);

namespace App\Monitoring\Queries;

use Domain\Monitoring\Enums\FacilityStatus;
use Domain\Monitoring\Enums\FacilityType;
use Domain\Monitoring\Models\Facility;
use Illuminate\Database\Eloquent\Collection;

final class ListFacilitiesQuery
{
    public function execute(?FacilityStatus $status = null, ?FacilityType $type = null): Collection
    {
        return Facility::query()
            ->when($status !== null, fn ($q) => $q->where('status', $status))
            ->when($type !== null, fn ($q) => $q->where('type', $type))
            ->orderBy('name')
            ->get();
    }
}
