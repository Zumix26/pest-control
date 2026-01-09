<?php

declare(strict_types=1);

namespace App\Application\Http\Requests;

use App\Domain\Monitoring\Enums\TrapStatus;
use App\Domain\Monitoring\Enums\TrapType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
