<?php

declare(strict_types=1);

namespace App\Monitoring\UseCases\Customers;

use App\DTOs\UpdateCustomerDTO;
use Domain\Monitoring\Models\Customer;
use DomainException;
use Illuminate\Support\Facades\DB;

final class UpdateCustomerUseCase
{
    public function execute(UpdateCustomerDTO $dto): Customer
    {
        return DB::transaction(function () use ($dto) {
            $customer = Customer::find($dto->id);

            if ($customer === null) {
                throw new DomainException("Customer with id '{$dto->id}' not found");
            }

            $customer->update([
                'name' => $dto->name,
                'email' => $dto->email,
                'phone' => $dto->phone,
                'type' => $dto->type,
                'billing_address' => $dto->billingAddress,
                'tax_number' => $dto->taxNumber,
                'notes' => $dto->notes,
                'status' => $dto->status,
            ]);

            return $customer->fresh();
        });
    }
}
