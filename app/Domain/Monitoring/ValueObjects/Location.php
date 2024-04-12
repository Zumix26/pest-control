<?php

declare(strict_types=1);

namespace App\Domain\Monitoring\ValueObjects;

final readonly class Location
{
    public function __construct(
        private float $latitude,
        private float $longitude,
    ) {
        if ($latitude < -90 || $latitude > 90) {
            throw new \InvalidArgumentException('Latitude must be between -90 and 90');
        }

        if ($longitude < -180 || $longitude > 180) {
            throw new \InvalidArgumentException('Longitude must be between -180 and 180');
        }
    }

    public function latitude(): float
    {
        return $this->latitude;
    }

    public function longitude(): float
    {
        return $this->longitude;
    }

    public function toArray(): array
    {
        return [
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            latitude: $data['latitude'] ?? 0.0,
            longitude: $data['longitude'] ?? 0.0,
        );
    }
}
