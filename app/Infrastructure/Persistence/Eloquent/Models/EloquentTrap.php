<?php

declare(strict_types=1);

namespace App\Infrastructure\Persistence\Eloquent\Models;

use App\Domain\Monitoring\Enums\TrapStatus;
use App\Domain\Monitoring\Enums\TrapType;
use Database\Factories\EloquentTrapFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

final class EloquentTrap extends Model
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

    public function gateway(): BelongsTo
    {
        return $this->belongsTo(EloquentGateway::class, 'gateway_id');
    }

    public function events(): HasMany
    {
        return $this->hasMany(EloquentTrapEvent::class, 'trap_id');
    }

    protected static function newFactory(): Factory
    {
        return EloquentTrapFactory::new();
    }
}
