<?php

declare(strict_types=1);

namespace App\Http\Resources;

use Domain\Monitoring\Models\Facility;
use DateTimeInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Attributes as OA;

/**
 * @property Facility $resource
 */
#[OA\Schema(
    schema: 'FacilityResource',
    properties: [
        new OA\Property(property: 'id', type: 'string', format: 'uuid'),
        new OA\Property(property: 'name', type: 'string'),
        new OA\Property(
            property: 'address',
            properties: [
                new OA\Property(property: 'street', type: 'string'),
                new OA\Property(property: 'city', type: 'string'),
                new OA\Property(property: 'postal_code', type: 'string'),
                new OA\Property(property: 'country', type: 'string'),
            ],
            type: 'object'
        ),
        new OA\Property(property: 'contact_person', type: 'string'),
        new OA\Property(property: 'contact_phone', type: 'string'),
        new OA\Property(property: 'type', type: 'string'),
        new OA\Property(property: 'area', type: 'number', format: 'float'),
        new OA\Property(property: 'description', type: 'string'),
        new OA\Property(property: 'status', type: 'string'),
        new OA\Property(property: 'is_active', type: 'boolean'),
        new OA\Property(property: 'created_at', type: 'string', format: 'date-time'),
        new OA\Property(property: 'updated_at', type: 'string', format: 'date-time'),
    ]
)]
final class FacilityResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'name' => $this->resource->name,
            'address' => $this->resource->address,
            'contact_person' => $this->resource->contact_person,
            'contact_phone' => $this->resource->contact_phone,
            'type' => $this->resource->type->value,
            'area' => $this->resource->area,
            'description' => $this->resource->description,
            'status' => $this->resource->status->value,
            'is_active' => $this->resource->isActive(),
            'created_at' => $this->resource->created_at->format(DateTimeInterface::ATOM),
            'updated_at' => $this->resource->updated_at->format(DateTimeInterface::ATOM),
        ];
    }
}
