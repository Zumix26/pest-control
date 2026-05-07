<?php

declare(strict_types=1);

namespace App\Http\Resources;

use App\Domain\Monitoring\Models\Customer;
use DateTimeInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Attributes as OA;

/**
 * @property Customer $resource
 */
#[OA\Schema(
    schema: 'CustomerResource',
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
    ]
)]
final class CustomerResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'name' => $this->resource->name,
            'email' => $this->resource->email,
            'phone' => $this->resource->phone,
            'type' => $this->resource->type->value,
            'billing_address' => $this->resource->billing_address,
            'tax_number' => $this->resource->tax_number,
            'notes' => $this->resource->notes,
            'status' => $this->resource->status->value,
            'is_active' => $this->resource->isActive(),
            'created_at' => $this->resource->created_at->format(DateTimeInterface::ATOM),
            'updated_at' => $this->resource->updated_at->format(DateTimeInterface::ATOM),
        ];
    }
}
