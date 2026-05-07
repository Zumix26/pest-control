<?php

declare(strict_types=1);

namespace App\Application\Http\Resources;

use App\Domain\Monitoring\Models\Customer;
use DateTimeInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Attributes as OA;

/**
 * @property array{customer: Customer, facilities: array, facilities_count: int} $resource
 */
#[OA\Schema(
    schema: 'CustomerWithFacilitiesResource',
    properties: [
        new OA\Property(property: 'id', type: 'string', format: 'uuid'),
        new OA\Property(property: 'name', type: 'string'),
        new OA\Property(property: 'email', type: 'string', format: 'email'),
        new OA\Property(property: 'phone', type: 'string'),
        new OA\Property(property: 'type', type: 'string'),
        new OA\Property(
            property: 'billing_address',
            type: 'object',
            properties: [
                new OA\Property(property: 'street', type: 'string'),
                new OA\Property(property: 'city', type: 'string'),
                new OA\Property(property: 'postal_code', type: 'string'),
                new OA\Property(property: 'country', type: 'string'),
            ]
        ),
        new OA\Property(property: 'tax_number', type: 'string', nullable: true),
        new OA\Property(property: 'notes', type: 'string'),
        new OA\Property(property: 'status', type: 'string'),
        new OA\Property(property: 'is_active', type: 'boolean'),
        new OA\Property(property: 'created_at', type: 'string', format: 'date-time'),
        new OA\Property(property: 'updated_at', type: 'string', format: 'date-time'),
        new OA\Property(
            property: 'facilities',
            description: 'Объекты, принадлежащие клиенту',
            type: 'array',
            items: new OA\Items(ref: '#/components/schemas/FacilityResource')
        ),
        new OA\Property(property: 'facilities_count', description: 'Количество объектов', type: 'integer', example: 3),
    ]
)]
final class CustomerWithFacilitiesResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        /** @var Customer $customer */
        $customer = $this->resource['customer'];

        return [
            'id' => $customer->id,
            'name' => $customer->name,
            'email' => $customer->email,
            'phone' => $customer->phone,
            'type' => $customer->type->value,
            'billing_address' => $customer->billing_address,
            'tax_number' => $customer->tax_number,
            'notes' => $customer->notes,
            'status' => $customer->status->value,
            'is_active' => $customer->isActive(),
            'created_at' => $customer->created_at->format(DateTimeInterface::ATOM),
            'updated_at' => $customer->updated_at->format(DateTimeInterface::ATOM),

            'facilities' => FacilityResource::collection($this->resource['facilities']),
            'facilities_count' => $this->resource['facilities_count'],
        ];
    }
}
