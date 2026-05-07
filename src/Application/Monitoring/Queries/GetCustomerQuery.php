<?php

declare(strict_types=1);

namespace App\Application\Monitoring\Queries;

use App\Domain\Monitoring\Models\Customer;

final class GetCustomerQuery
{
    public function execute(string $id): ?array
    {
        $customer = Customer::query()->with('facilities')->find($id);

        if ($customer === null) {
            return null;
        }

        return [
            'customer' => $customer,
            'facilities' => $customer->facilities->all(),
            'facilities_count' => $customer->facilities->count(),
        ];
    }
}
