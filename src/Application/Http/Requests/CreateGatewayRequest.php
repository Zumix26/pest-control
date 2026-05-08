<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Domain\Monitoring\Enums\GatewayStatus;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use OpenApi\Attributes as OA;

#[OA\Schema(
    schema: 'CreateGatewayRequest',
    required: ['hardware_id', 'name'],
    properties: [
        new OA\Property(
            property: 'hardware_id',
            description: 'Уникальный идентификатор оборудования шлюза',
            type: 'string',
            maxLength: 255,
            example: 'GW-001-ABC123'
        ),
        new OA\Property(
            property: 'facility_id',
            description: 'UUID объекта, на котором устанавливается этот шлюз',
            type: 'string',
            format: 'uuid',
            example: '019bac36-54b6-70dc-94c3-cea624a51791'
        ),
        new OA\Property(
            property: 'name',
            description: 'Название шлюза',
            type: 'string',
            maxLength: 255,
            example: 'Gateway Floor 1'
        ),
        new OA\Property(
            property: 'status',
            description: 'Статус шлюза',
            type: 'string',
            enum: ['online', 'offline', 'maintenance'],
            example: 'online',
            nullable: true
        ),
        new OA\Property(
            property: 'location',
            description: 'Географическое расположение шлюза',
            properties: [
                new OA\Property(property: 'latitude', type: 'number', format: 'float', maximum: 90, minimum: -90, example: 50.4501),
                new OA\Property(property: 'longitude', type: 'number', format: 'float', maximum: 180, minimum: -180, example: 30.5234)
            ],
            type: 'object',
            nullable: true
        )
    ]
)]
final class CreateGatewayRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'hardware_id' => ['required', 'string', 'max:255', 'unique:gateways,hardware_id'],
            'facility_id' => ['nullable', 'uuid', 'exists:facilities,id'],
            'name' => ['required', 'string', 'max:255'],
            'status' => ['nullable', Rule::enum(GatewayStatus::class)],
            'location' => ['nullable', 'array'],
            'location.latitude' => ['required_with:location', 'numeric', 'between:-90,90'],
            'location.longitude' => ['required_with:location', 'numeric', 'between:-180,180'],
        ];
    }
}
