<?php

declare(strict_types=1);

namespace Domain\Monitoring\Models;

use App\Domain\Monitoring\Enums\CustomerStatus;
use App\Domain\Monitoring\Enums\CustomerType;
use DomainException;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

final class Customer extends Model
{
    use HasFactory;
    use HasUuids;
    use SoftDeletes;

    protected $table = 'customers';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'type',
        'billing_address',
        'tax_number',
        'notes',
        'status',
    ];

    protected $casts = [
        'billing_address' => 'array',
        'type' => CustomerType::class,
        'status' => CustomerStatus::class,
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
            throw new DomainException('Cannot activate a deleted customer');
        }

        $this->status = CustomerStatus::ACTIVE;
        $this->save();
    }

    public function deactivate(): void
    {
        $this->status = CustomerStatus::INACTIVE;
        $this->save();
    }

    public function isActive(): bool
    {
        return $this->status->isActive() && $this->deleted_at === null;
    }

    public function facilities(): HasMany
    {
        return $this->hasMany(Facility::class, 'customer_id');
    }
}
