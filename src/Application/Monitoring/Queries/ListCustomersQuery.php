<?php

declare(strict_types=1);

namespace App\Monitoring\Queries;

use Domain\Monitoring\Enums\CustomerStatus;
use Domain\Monitoring\Enums\CustomerType;
use Domain\Monitoring\Models\Customer;
use Illuminate\Database\Eloquent\Collection;

final class ListCustomersQuery
{
    public function execute(?CustomerStatus $status = null, ?CustomerType $type = null): Collection
    {
        return Customer::query()
            ->when($status !== null, fn ($q) => $q->where('status', $status))
            ->when($type !== null, fn ($q) => $q->where('type', $type))
            ->orderBy('name')
            ->get();
    }
}
