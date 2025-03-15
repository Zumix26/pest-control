<?php

declare(strict_types=1);

namespace App\Infrastructure\Persistence\Eloquent\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

final class EloquentTrapEvent extends Model
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

    public function trap(): BelongsTo
    {
        return $this->belongsTo(EloquentTrap::class, 'trap_id');
    }
}
