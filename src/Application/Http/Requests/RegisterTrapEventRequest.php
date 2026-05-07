<?php

declare(strict_types=1);

namespace App\Application\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use OpenApi\Attributes as OA;

#[OA\Schema(
    schema: 'RegisterTrapEventRequest',
    required: ['trap_id', 'timestamp', 'metadata'],
    properties: [
        new OA\Property(
            property: 'trap_id',
            description: 'UUID ловушки, которая сработала',
            type: 'string',
            format: 'uuid',
            example: '9d4e1c45-6b2a-4f8e-9c7d-3a1b5e8f4d2c'
        ),
        new OA\Property(
            property: 'timestamp',
            description: 'Unix timestamp события срабатывания',
            type: 'integer',
            minimum: 0,
            example: 1704067200
        ),
        new OA\Property(
            property: 'metadata',
            description: 'Метаданные события',
            required: ['battery_level', 'rssi'],
            properties: [
                new OA\Property(
                    property: 'battery_level',
                    description: 'Уровень заряда батареи в процентах',
                    type: 'integer',
                    maximum: 100,
                    minimum: 0,
                    example: 85
                ),
                new OA\Property(
                    property: 'rssi',
                    description: 'Мощность сигнала в dBm',
                    type: 'integer',
                    maximum: 0,
                    minimum: -120,
                    example: -65
                )
            ],
            type: 'object'
        )
    ]
)]
final class RegisterTrapEventRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'trap_id' => ['required', 'uuid', 'exists:traps,id'],
            'metadata' => ['required', 'array'],
            'metadata.battery_level' => ['required', 'integer', 'between:0,100'],
            'metadata.rssi' => ['required', 'integer', 'between:-120,0'],
        ];
    }
}
