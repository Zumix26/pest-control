<?php

declare(strict_types=1);

namespace App\Application\DTOs;

use App\Domain\Monitoring\Enums\FacilityStatus;
use App\Domain\Monitoring\Enums\FacilityType;
use Illuminate\Http\Request;

final readonly class CreateFacilityDTO
{
    public function __construct(
        public string $name,
        public array $address,
        public string $contactPerson,
        public string $contactPhone,
        public FacilityType $type,
        public float $area,
        public string $description,
        public FacilityStatus $status,
        public ?string $customerId = null,
    ) {}

    public static function fromRequest(Request $request): self
    {
        return new self(
            name: $request->string('name')->toString(),
            address: $request->input('address', []),
            contactPerson: $request->string('contact_person')->toString(),
            contactPhone: $request->string('contact_phone')->toString(),
            type: FacilityType::from($request->string('type')->toString()),
            area: $request->float('area'),
            description: $request->string('description')->toString(),
            status: $request->has('status')
                ? FacilityStatus::from($request->string('status')->toString())
                : FacilityStatus::ACTIVE,
            customerId: $request->input('customer_id'),
        );
    }
}
