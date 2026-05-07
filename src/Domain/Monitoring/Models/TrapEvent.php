<?php

declare(strict_types=1);

namespace App\Domain\Monitoring\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

final class TrapEvent extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'trap_events';

    public const UPDATED_AT = null;

    protected $fillable = [
        'trap_id',
        'caught_at',
        'battery_level',
        'rssi',
        'metadata',
    ];

    protected $casts = [
        'caught_at' => 'datetime',
        'battery_level' => 'integer',
        'rssi' => 'integer',
        'metadata' => 'array',
        'created_at' => 'datetime',
    ];

    public function newUniqueId(): string
    {
        return (string) Str::uuid7();
    }

    public function hasWeakSignal(): bool
    {
        return $this->rssi < -80;
    }

    public function signalQuality(): string
    {
        return match (true) {
            $this->rssi >= -50 => 'excellent',
            $this->rssi >= -60 => 'good',
            $this->rssi >= -70 => 'fair',
            $this->rssi >= -80 => 'poor',
            default => 'very_poor',
        };
    }

    public function trap(): BelongsTo
    {
        return $this->belongsTo(Trap::class, 'trap_id');
    }
}
