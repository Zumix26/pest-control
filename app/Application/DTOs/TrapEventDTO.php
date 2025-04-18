<?php

declare(strict_types=1);

namespace App\Application\DTOs;

use Illuminate\Http\Request;

final readonly class TrapEventDTO
{
    public function __construct(
        public string $trapId,
        public \DateTimeImmutable $caughtAt,
        public int $batteryLevel,
        public int $rssi,
        public array $metadata,
    ) {}

    public static function fromRequest(Request $request): self
    {
        return new self(
            trapId: $request->input('trap_id'),
            caughtAt: new \DateTimeImmutable('@' . $request->integer('timestamp')),
            batteryLevel: $request->integer('metadata.battery_level'),
            rssi: $request->integer('metadata.rssi'),
            metadata: $request->input('metadata', []),
        );
    }
}
