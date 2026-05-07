<?php

declare(strict_types=1);

namespace App\Application\Monitoring\UseCases;

use App\Application\DTOs\CreateCustomerDTO;
use App\Domain\Monitoring\Models\Customer;
use Illuminate\Support\Facades\DB;

final class CreateCustomerUseCase
{
    public function execute(CreateCustomerDTO $dto): Customer
    {
        return DB::transaction(fn () => Customer::create([
            'name' => $dto->name,
            'email' => $dto->email,
            'phone' => $dto->phone,
            'type' => $dto->type,
            'billing_address' => $dto->billingAddress,
            'tax_number' => $dto->taxNumber,
            'notes' => $dto->notes,
            'status' => $dto->status,
        ]));
    }
}
