<?php

declare(strict_types=1);

namespace App\DTOs;

use Domain\Monitoring\Enums\CustomerStatus;
use Domain\Monitoring\Enums\CustomerType;
use Illuminate\Http\Request;

final readonly class CreateCustomerDTO
{
    public function __construct(
        public string $name,
        public string $email,
        public string $phone,
        public CustomerType $type,
        public array $billingAddress,
        public ?string $taxNumber,
        public string $notes,
        public CustomerStatus $status,
    ) {}

    public static function fromRequest(Request $request): self
    {
        return new self(
            name: $request->string('name')->toString(),
            email: $request->string('email')->toString(),
            phone: $request->string('phone')->toString(),
            type: CustomerType::from($request->string('type')->toString()),
            billingAddress: $request->input('billing_address', []),
            taxNumber: $request->input('tax_number'),
            notes: $request->string('notes')->toString(),
            status: $request->has('status')
                ? CustomerStatus::from($request->string('status')->toString())
                : CustomerStatus::ACTIVE,
        );
    }
}
