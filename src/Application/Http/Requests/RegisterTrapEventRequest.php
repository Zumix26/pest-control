<?php

declare(strict_types=1);

namespace App\Application\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'timestamp' => ['required', 'integer', 'min:0'],
            'metadata' => ['required', 'array'],
            'metadata.battery_level' => ['required', 'integer', 'between:0,100'],
            'metadata.rssi' => ['required', 'integer', 'between:-120,0'],
        ];
    }
}
