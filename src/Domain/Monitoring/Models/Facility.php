<?php

declare(strict_types=1);

namespace Domain\Monitoring\Models;

use App\Domain\Monitoring\Enums\FacilityStatus;
use App\Domain\Monitoring\Enums\FacilityType;
use DomainException;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

final class Facility extends Model
{
    use HasFactory;
    use HasUuids;
    use SoftDeletes;

    protected $table = 'facilities';

    protected $fillable = [
        'name',
        'address',
        'contact_person',
        'contact_phone',
        'type',
        'area',
        'description',
        'status',
        'customer_id',
    ];

    protected $casts = [
        'address' => 'array',
        'type' => FacilityType::class,
        'status' => FacilityStatus::class,
        'area' => 'float',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    public function newUniqueId(): string
    {
        return (string) Str::uuid7();
    }

    public function activate(): void
    {
        if ($this->deleted_at !== null) {
            throw new DomainException('Cannot activate a deleted facility');
        }

        $this->status = FacilityStatus::ACTIVE;
        $this->save();
    }

    public function deactivate(): void
    {
        $this->status = FacilityStatus::INACTIVE;
        $this->save();
    }

    public function isActive(): bool
    {
        return $this->status->isActive() && $this->deleted_at === null;
    }

    public function gateways(): HasMany
    {
        return $this->hasMany(Gateway::class, 'facility_id');
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
