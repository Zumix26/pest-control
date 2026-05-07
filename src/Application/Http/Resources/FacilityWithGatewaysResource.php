<?php

declare(strict_types=1);

namespace App\Application\Http\Resources;

use App\Domain\Monitoring\Models\Facility;
use DateTimeInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Attributes as OA;

/**
 * @property array{facility: Facility, gateways: array, gateway_count: int} $resource
 */
#[OA\Schema(
    schema: 'FacilityWithGatewaysResource',
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
        new OA\Property(
            property: 'gateways',
            description: 'Шлюзы, установленные на объекте',
            type: 'array',
            items: new OA\Items(ref: '#/components/schemas/GatewayResource')
        ),
        new OA\Property(property: 'gateway_count', description: 'Количество шлюзов', type: 'integer', example: 5),
    ]
)]
final class FacilityWithGatewaysResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        /** @var Facility $facility */
        $facility = $this->resource['facility'];

        return [
            'id' => $facility->id,
            'name' => $facility->name,
            'address' => $facility->address,
            'contact_person' => $facility->contact_person,
            'contact_phone' => $facility->contact_phone,
            'type' => $facility->type->value,
            'area' => $facility->area,
            'description' => $facility->description,
            'status' => $facility->status->value,
            'is_active' => $facility->isActive(),
            'created_at' => $facility->created_at->format(DateTimeInterface::ATOM),
            'updated_at' => $facility->updated_at->format(DateTimeInterface::ATOM),

            'gateways' => GatewayResource::collection($this->resource['gateways']),
            'gateway_count' => $this->resource['gateway_count'],
        ];
    }
}
