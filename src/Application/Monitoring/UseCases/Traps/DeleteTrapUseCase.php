<?php

declare(strict_types=1);

namespace App\Monitoring\UseCases\Traps;

use Domain\Monitoring\Models\Trap;
use DomainException;
use Illuminate\Support\Facades\DB;

final class DeleteTrapUseCase
{
    public function execute(string $id): void
    {
        DB::transaction(function () use ($id) {
            $trap = Trap::find($id);

            if ($trap === null) {
                throw new DomainException("Trap with id '{$id}' not found");
            }
            $trap->delete();
        });
    }
}
