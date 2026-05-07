<?php

declare(strict_types=1);

namespace App\Domain\Monitoring\Models;

use App\Domain\Monitoring\Enums\GatewayStatus;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

final class Gateway extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'gateways';

    protected $fillable = [
        'hardware_id',
        'facility_id',
        'api_key',
        'name',
        'location',
        'status',
        'last_seen_at',
    ];

    protected $hidden = [
        'api_key',
    ];

    protected $casts = [
        'location' => 'array',
        'status' => GatewayStatus::class,
        'last_seen_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function newUniqueId(): string
    {
        return (string) Str::uuid7();
    }

    public function validateSignature(string $payload, string $signature): bool
    {
        $expected = hash_hmac('sha256', $payload, $this->api_key);

        return hash_equals($expected, $signature);
    }

    public function updateLastSeen(): void
    {
        $this->last_seen_at = now();
        $this->save();
    }

    public function isOnline(): bool
    {
        $fifteenMinutesAgo = now()->subMinutes(15);

        return $this->last_seen_at !== null
            && $this->last_seen_at->greaterThan($fifteenMinutesAgo)
            && $this->status->isAvailable();
    }

    public function traps(): HasMany
    {
        return $this->hasMany(Trap::class, 'gateway_id');
    }

    public function facility(): BelongsTo
    {
        return $this->belongsTo(Facility::class, 'facility_id');
    }
}
