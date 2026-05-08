<?php

declare(strict_types=1);

namespace App\Monitoring\UseCases\Customers;

use Domain\Monitoring\Enums\GatewayStatus;
use Domain\Monitoring\Enums\TrapStatus;
use Domain\Monitoring\Models\Customer;
use Domain\Monitoring\Models\Facility;
use Domain\Monitoring\Models\Gateway;
use Domain\Monitoring\Models\Trap;
use Illuminate\Support\Facades\DB;

final class DeleteCustomerUseCase
{
    public function execute(string $customerId): void
    {
        DB::transaction(function () use ($customerId) {
            $customer = Customer::find($customerId);

            if ($customer === null) {
                throw new \DomainException("Customer with id '{$customerId}' not found");
            }

            $facilityIds = Facility::query()
                ->where('customer_id', $customerId)
                ->pluck('id')
                ->toArray();

            if (!empty($facilityIds)) {
                $gatewayIds = Gateway::query()
                    ->whereIn('facility_id', $facilityIds)
                    ->pluck('id')
                    ->toArray();

                if (!empty($gatewayIds)) {
                    Trap::query()
                        ->whereIn('gateway_id', $gatewayIds)
                        ->update(['status' => TrapStatus::IN_STOCK, 'gateway_id' => null]);
                }

                Gateway::query()
                    ->whereIn('facility_id', $facilityIds)
                    ->update(['status' => GatewayStatus::IN_STOCK, 'facility_id' => null]);

                Facility::query()
                    ->whereIn('id', $facilityIds)
                    ->delete();
            }

            $customer->delete();
        });
    }
}
