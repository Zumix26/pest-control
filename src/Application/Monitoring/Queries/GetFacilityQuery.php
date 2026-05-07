<?php

declare(strict_types=1);

namespace App\Application\Monitoring\Queries;

use App\Domain\Monitoring\Models\Facility;

final class GetFacilityQuery
{
    public function execute(string $id): ?array
    {
        $facility = Facility::query()->with('gateways')->find($id);

        if ($facility === null) {
            return null;
        }

        return [
            'facility' => $facility,
            'gateways' => $facility->gateways->all(),
            'gateway_count' => $facility->gateways->count(),
        ];
    }
}
