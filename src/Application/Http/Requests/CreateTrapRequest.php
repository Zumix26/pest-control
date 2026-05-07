<?php

declare(strict_types=1);

namespace App\Application\Http\Requests;

use App\Domain\Monitoring\Enums\TrapStatus;
use App\Domain\Monitoring\Enums\TrapType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use OpenApi\Attributes as OA;

#[OA\Schema(
    schema: 'CreateTrapRequest',
    required: ['hardware_id', 'gateway_id', 'name', 'type'],
    properties: [
        new OA\Property(
            property: 'hardware_id',
            description: 'Уникальный идентификатор оборудования ловушки',
            type: 'string',
            maxLength: 255,
            example: 'TRAP-001-XYZ789'
        ),
        new OA\Property(
            property: 'gateway_id',
            description: 'UUID шлюза, к которому подключена ловушка',
            type: 'string',
            format: 'uuid',
            example: '9d4e1c45-6b2a-4f8e-9c7d-3a1b5e8f4d2c'
        ),
        new OA\Property(
            property: 'name',
            description: 'Название ловушки',
            type: 'string',
            maxLength: 255,
            example: 'Trap Kitchen Area'
        ),
        new OA\Property(
            property: 'type',
            description: 'Тип ловушки',
            type: 'string',
            enum: ['rat', 'mouse', 'insect'],
            example: 'rat'
        ),
        new OA\Property(
            property: 'status',
            description: 'Статус ловушки',
            type: 'string',
            enum: ['active', 'inactive', 'maintenance', 'faulty'],
            example: 'active',
            nullable: true
        ),
        new OA\Property(
            property: 'location',
            description: 'Географическое расположение ловушки',
            properties: [
                new OA\Property(property: 'latitude', type: 'number', format: 'float', maximum: 90, minimum: -90, example: 50.4501),
                new OA\Property(property: 'longitude', type: 'number', format: 'float', maximum: 180, minimum: -180, example: 30.5234)
            ],
            type: 'object',
            nullable: true
        )
    ]
)]
final class CreateTrapRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'hardware_id' => ['required', 'string', 'max:255', 'unique:traps,hardware_id'],
            'gateway_id' => ['required', 'uuid', 'exists:gateways,id'],
            'name' => ['required', 'string', 'max:255'],
            'type' => ['required', Rule::enum(TrapType::class)],
            'status' => ['nullable', Rule::enum(TrapStatus::class)],
            'location' => ['nullable', 'array'],
            'location.latitude' => ['required_with:location', 'numeric', 'between:-90,90'],
            'location.longitude' => ['required_with:location', 'numeric', 'between:-180,180'],
        ];
    }
}
