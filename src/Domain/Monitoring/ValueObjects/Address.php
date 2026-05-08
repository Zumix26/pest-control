<?php

declare(strict_types=1);

namespace Domain\Monitoring\ValueObjects;

use InvalidArgumentException;

final readonly class Address
{
    public function __construct(
        private string $street,
        private string $city,
        private string $postalCode,
        private string $country,
    ) {
        if (empty($street)) {
            throw new InvalidArgumentException('Street cannot be empty');
        }

        if (empty($city)) {
            throw new InvalidArgumentException('City cannot be empty');
        }

        if (empty($postalCode)) {
            throw new InvalidArgumentException('Postal code cannot be empty');
        }

        if (empty($country)) {
            throw new InvalidArgumentException('Country cannot be empty');
        }

        // Basic postal code validation (alphanumeric + spaces/hyphens)
        if (!preg_match('/^[A-Za-z0-9\s\-]+$/', $postalCode)) {
            throw new InvalidArgumentException('Invalid postal code format');
        }
    }

    public function street(): string
    {
        return $this->street;
    }

    public function city(): string
    {
        return $this->city;
    }

    public function postalCode(): string
    {
        return $this->postalCode;
    }

    public function country(): string
    {
        return $this->country;
    }

    public function toArray(): array
    {
        return [
            'street' => $this->street,
            'city' => $this->city,
            'postal_code' => $this->postalCode,
            'country' => $this->country,
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            street: $data['street'] ?? '',
            city: $data['city'] ?? '',
            postalCode: $data['postal_code'] ?? '',
            country: $data['country'] ?? '',
        );
    }

    public function fullAddress(): string
    {
        return "{$this->street}, {$this->city}, {$this->postalCode}, {$this->country}";
    }

    public function equals(self $other): bool
    {
        return $this->street === $other->street
            && $this->city === $other->city
            && $this->postalCode === $other->postalCode
            && $this->country === $other->country;
    }
}
