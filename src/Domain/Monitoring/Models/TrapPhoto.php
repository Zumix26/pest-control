<?php

declare(strict_types=1);

namespace App\Domain\Monitoring\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

final class TrapPhoto extends Model
{
    use HasUuids;

    protected $table = 'trap_photos';

    public const UPDATED_AT = null;

    protected $fillable = [
        'trap_id',
        'file_path',
        'file_size',
        'captured_at',
        'ai_result',
    ];

    protected $casts = [
        'captured_at' => 'datetime',
        'created_at' => 'datetime',
        'file_size' => 'integer',
        'ai_result' => 'array',
    ];

    public function newUniqueId(): string
    {
        return (string) Str::uuid7();
    }

    public function trap(): BelongsTo
    {
        return $this->belongsTo(Trap::class, 'trap_id');
    }
}
