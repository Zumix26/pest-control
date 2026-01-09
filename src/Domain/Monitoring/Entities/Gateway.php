<?php

declare(strict_types=1);

namespace App\Domain\Monitoring\Entities;

use App\Domain\Monitoring\Enums\GatewayStatus;
use App\Domain\Monitoring\ValueObjects\HardwareId;
use App\Domain\Monitoring\ValueObjects\Location;

final class Gateway
{
    private function __construct(
        private string $id,
        private HardwareId $hardwareId,
        private string $apiKey,
        private string $name,
        private Location $location,
        private GatewayStatus $status,
        private \DateTimeImmutable $lastSeenAt,
        private \DateTimeImmutable $createdAt,
        private \DateTimeImmutable $updatedAt,
    ) {}

    public static function create(
        string $id,
        HardwareId $hardwareId,
        string $apiKey,
        string $name,
        Location $location,
    ): self {
        $now = new \DateTimeImmutable();

        return new self(
            id: $id,
            hardwareId: $hardwareId,
            apiKey: $apiKey,
            name: $name,
            location: $location,
            status: GatewayStatus::ONLINE,
            lastSeenAt: $now,
            createdAt: $now,
            updatedAt: $now,
        );
    }

    public static function fromPrimitives(
        string $id,
        string $hardwareId,
        string $apiKey,
        string $name,
        array $location,
        string $status,
        string $lastSeenAt,
        string $createdAt,
        string $updatedAt,
    ): self {
        return new self(
            id: $id,
            hardwareId: new HardwareId($hardwareId),
            apiKey: $apiKey,
            name: $name,
            location: Location::fromArray($location),
            status: GatewayStatus::from($status),
            lastSeenAt: new \DateTimeImmutable($lastSeenAt),
            createdAt: new \DateTimeImmutable($createdAt),
            updatedAt: new \DateTimeImmutable($updatedAt),
        );
    }

    public function validateSignature(string $payload, string $signature): bool
    {
        $expectedSignature = hash_hmac('sha256', $payload, $this->apiKey);

        return hash_equals($expectedSignature, $signature);
    }

    public function updateLastSeen(): void
    {
        $this->lastSeenAt = new \DateTimeImmutable();
        $this->updatedAt = new \DateTimeImmutable();
    }

    public function updateStatus(GatewayStatus $status): void
    {
        $this->status = $status;
        $this->updatedAt = new \DateTimeImmutable();
    }

    public function isOnline(): bool
    {
        // Consider gateway offline if not seen in last 15 minutes
        $fifteenMinutesAgo = new \DateTimeImmutable('-15 minutes');

        return $this->lastSeenAt > $fifteenMinutesAgo && $this->status->isAvailable();
    }

    // Getters
    public function id(): string
    {
        return $this->id;
    }

    public function hardwareId(): HardwareId
    {
        return $this->hardwareId;
    }

    public function apiKey(): string
    {
        return $this->apiKey;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function location(): Location
    {
        return $this->location;
    }

    public function status(): GatewayStatus
    {
        return $this->status;
    }

    public function lastSeenAt(): \DateTimeImmutable
    {
        return $this->lastSeenAt;
    }

    public function createdAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function updatedAt(): \DateTimeImmutable
    {
        return $this->updatedAt;
    }
}
