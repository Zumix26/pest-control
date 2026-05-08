<?php

declare(strict_types=1);

namespace Domain\Monitoring\Models;

use Database\Factories\TrapFactory;
use Domain\Monitoring\Enums\TrapStatus;
use Domain\Monitoring\Enums\TrapType;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

final class Trap extends Model
{
    use HasFactory;
    use HasUuids;
    use SoftDeletes;

    protected $table = 'traps';

    protected $fillable = [
        'hardware_id',
        'gateway_id',
        'name',
        'type',
        'status',
        'location',
        'battery_level',
        'total_catches',
        'last_event_at',
    ];

    protected $casts = [
        'type' => TrapType::class,
        'status' => TrapStatus::class,
        'location' => 'array',
        'battery_level' => 'integer',
        'total_catches' => 'integer',
        'last_event_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    
    public function newUniqueId(): string
    {
        return (string) Str::uuid7();
    }

    public function trigger(\DateTimeInterface $at, int $batteryLevel): void
    {
        $this->total_catches++;
        $this->last_event_at = $at;
        $this->battery_level = $batteryLevel;
        $this->save();
    }

    public function isLowBattery(): bool
    {
        return $this->battery_level < 20;
    }

    public function isOperational(): bool
    {
        return $this->status->isOperational();
    }

    public function gateway(): BelongsTo
    {
        return $this->belongsTo(Gateway::class, 'gateway_id');
    }

    public function events(): HasMany
    {
        return $this->hasMany(TrapEvent::class, 'trap_id');
    }
}
