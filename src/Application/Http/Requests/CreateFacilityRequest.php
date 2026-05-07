<?php

declare(strict_types=1);

namespace App\Application\Http\Requests;

use App\Domain\Monitoring\Enums\FacilityStatus;
use App\Domain\Monitoring\Enums\FacilityType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use OpenApi\Attributes as OA;

#[OA\Schema(
    schema: 'CreateFacilityRequest',
    required: ['name', 'address', 'contact_person', 'contact_phone', 'type', 'area'],
    properties: [
        new OA\Property(property: 'name', type: 'string', maxLength: 255, example: 'Main Warehouse'),
        new OA\Property(
            property: 'address',
            type: 'object',
            required: ['street', 'city', 'postal_code', 'country'],
            properties: [
                new OA\Property(property: 'street', type: 'string', example: '123 Main Street'),
                new OA\Property(property: 'city', type: 'string', example: 'Kyiv'),
                new OA\Property(property: 'postal_code', type: 'string', example: '01001'),
                new OA\Property(property: 'country', type: 'string', example: 'Ukraine'),
            ]
        ),
        new OA\Property(property: 'contact_person', type: 'string', example: 'John Doe'),
        new OA\Property(property: 'contact_phone', type: 'string', example: '+380501234567'),
        new OA\Property(property: 'type', type: 'string', enum: ['warehouse', 'restaurant', 'office', 'retail', 'industrial'], example: 'warehouse'),
        new OA\Property(property: 'area', type: 'number', format: 'float', minimum: 0, example: 1500.5),
        new OA\Property(property: 'description', type: 'string', nullable: true, example: 'Main distribution center'),
        new OA\Property(property: 'status', type: 'string', enum: ['active', 'inactive'], nullable: true, example: 'active'),
        new OA\Property(property: 'customer_id', type: 'string', format: 'uuid', nullable: true, example: '01963e34-e7bc-7890-b23c-000000000001'),
    ]
)]
final class CreateFacilityRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'array'],
            'address.street' => ['required', 'string', 'max:255'],
            'address.city' => ['required', 'string', 'max:255'],
            'address.postal_code' => ['required', 'string', 'max:50'],
            'address.country' => ['required', 'string', 'max:255'],
            'contact_person' => ['required', 'string', 'max:255'],
            'contact_phone' => ['required', 'string', 'max:50'],
            'type' => ['required', Rule::enum(FacilityType::class)],
            'area' => ['required', 'numeric', 'min:0'],
            'description' => ['nullable', 'string'],
            'status' => ['nullable', Rule::enum(FacilityStatus::class)],
            'customer_id' => ['nullable', 'string', 'uuid'],
        ];
    }
}
