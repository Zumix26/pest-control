<?php

declare(strict_types=1);

namespace App\Application\DTOs;

use App\Domain\Monitoring\Enums\TrapStatus;
use App\Domain\Monitoring\Enums\TrapType;
use Illuminate\Http\Request;

final readonly class CreateTrapDTO
{
    public function __construct(
        public string $hardwareId,
        public string $gatewayId,
        public string $name,
        public TrapType $type,
        public TrapStatus $status,
        public array $location,
    ) {}

    public static function fromRequest(Request $request): self
    {
        return new self(
            hardwareId: $request->string('hardware_id')->toString(),
            gatewayId: $request->string('gateway_id')->toString(),
            name: $request->string('name')->toString(),
            type: TrapType::from($request->string('type')->toString()),
            status: $request->has('status')
                ? TrapStatus::from($request->string('status')->toString())
                : TrapStatus::ACTIVE,
            location: $request->input('location', []),
        );
    }
}
