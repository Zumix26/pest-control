<?php

declare(strict_types=1);

namespace App\Application\DTOs;

use App\Domain\Monitoring\Enums\GatewayStatus;
use Illuminate\Http\Request;

final readonly class CreateGatewayDTO
{
    public function __construct(
        public string $hardwareId,
        public string $name,
        public array $location,
        public GatewayStatus $status,
    ) {}

    public static function fromRequest(Request $request): self
    {
        return new self(
            hardwareId: $request->string('hardware_id')->toString(),
            name: $request->string('name')->toString(),
            location: $request->input('location', []),
            status: $request->has('status')
                ? GatewayStatus::from($request->string('status')->toString())
                : GatewayStatus::ONLINE,
        );
    }
}
