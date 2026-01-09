<?php

declare(strict_types=1);

namespace App\Infrastructure\Persistence\Eloquent\Models;

use App\Domain\Monitoring\Enums\GatewayStatus;
use Database\Factories\EloquentGatewayFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

final class EloquentGateway extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'gateways';

    protected $fillable = [
        'hardware_id',
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

    public function traps(): HasMany
    {
        return $this->hasMany(EloquentTrap::class, 'gateway_id');
    }

    protected static function newFactory(): Factory
    {
        return EloquentGatewayFactory::new();
    }
}
