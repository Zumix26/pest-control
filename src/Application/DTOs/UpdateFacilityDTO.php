<?php

declare(strict_types=1);

namespace App\DTOs;

use Domain\Monitoring\Enums\FacilityStatus;
use Domain\Monitoring\Enums\FacilityType;
use Illuminate\Http\Request;

final readonly class UpdateFacilityDTO
{
    public function __construct(
        public string $id,
        public string $name,
        public array $address,
        public string $contactPerson,
        public string $contactPhone,
        public FacilityType $type,
        public float $area,
        public string $description,
        public FacilityStatus $status,
    ) {}

    public static function fromRequest(string $id, Request $request): self
    {
        return new self(
            id: $id,
            name: $request->string('name')->toString(),
            address: $request->input('address', []),
            contactPerson: $request->string('contact_person')->toString(),
            contactPhone: $request->string('contact_phone')->toString(),
            type: FacilityType::from($request->string('type')->toString()),
            area: $request->float('area'),
            description: $request->string('description')->toString(),
            status: FacilityStatus::from($request->string('status')->toString()),
        );
    }
}
