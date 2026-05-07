<?php

declare(strict_types=1);

namespace App\Application\DTOs;

use App\Domain\Monitoring\Enums\CustomerStatus;
use App\Domain\Monitoring\Enums\CustomerType;
use Illuminate\Http\Request;

final readonly class UpdateCustomerDTO
{
    public function __construct(
        public string $id,
        public string $name,
        public string $email,
        public string $phone,
        public CustomerType $type,
        public array $billingAddress,
        public ?string $taxNumber,
        public string $notes,
        public CustomerStatus $status,
    ) {}

    public static function fromRequest(string $id, Request $request): self
    {
        return new self(
            id: $id,
            name: $request->string('name')->toString(),
            email: $request->string('email')->toString(),
            phone: $request->string('phone')->toString(),
            type: CustomerType::from($request->string('type')->toString()),
            billingAddress: $request->input('billing_address', []),
            taxNumber: $request->input('tax_number'),
            notes: $request->string('notes')->toString(),
            status: CustomerStatus::from($request->string('status')->toString()),
        );
    }
}
