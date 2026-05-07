<?php

declare(strict_types=1);

namespace App\Application\Http\Requests;

use App\Domain\Monitoring\Enums\CustomerStatus;
use App\Domain\Monitoring\Enums\CustomerType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use OpenApi\Attributes as OA;

#[OA\Schema(
    schema: 'UpdateCustomerRequest',
    properties: [
        new OA\Property(property: 'name', type: 'string', maxLength: 255, example: 'ACME Corporation'),
        new OA\Property(property: 'email', type: 'string', format: 'email', example: 'info@acme.com'),
        new OA\Property(property: 'phone', type: 'string', maxLength: 50, example: '+380501234567'),
        new OA\Property(property: 'type', type: 'string', enum: ['individual', 'company'], example: 'company'),
        new OA\Property(
            property: 'billing_address',
            type: 'object',
            required: ['street', 'city', 'postal_code', 'country'],
            properties: [
                new OA\Property(property: 'street', type: 'string', example: '123 Business Ave'),
                new OA\Property(property: 'city', type: 'string', example: 'Kyiv'),
                new OA\Property(property: 'postal_code', type: 'string', example: '01001'),
                new OA\Property(property: 'country', type: 'string', example: 'Ukraine'),
            ]
        ),
        new OA\Property(property: 'tax_number', type: 'string', nullable: true, example: '1234567890'),
        new OA\Property(property: 'notes', type: 'string', nullable: true, example: 'Premium customer'),
        new OA\Property(property: 'status', type: 'string', enum: ['active', 'inactive'], example: 'active'),
    ]
)]
final class UpdateCustomerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'type' => ['required', Rule::enum(CustomerType::class)],
            'billing_address' => ['required', 'array'],
            'billing_address.street' => ['required_with:billing_address', 'string', 'max:255'],
            'billing_address.city' => ['required_with:billing_address', 'string', 'max:255'],
            'billing_address.postal_code' => ['required_with:billing_address', 'string', 'max:50'],
            'billing_address.country' => ['required_with:billing_address', 'string', 'max:255'],
            'tax_number' => ['nullable', 'string', 'max:255'],
            'notes' => ['nullable', 'string'],
            'status' => ['required', Rule::enum(CustomerStatus::class)],
        ];
    }
}
