<?php

declare(strict_types=1);

namespace App\Monitoring\UseCases\Traps;

use Domain\Monitoring\Models\Trap;
use Domain\Monitoring\Models\TrapPhoto;
use Illuminate\Support\Facades\Storage;

final class UploadTrapPhotoUseCase
{
    public function execute(string $trapId, string $imageData, \DateTimeInterface $capturedAt): TrapPhoto
    {
        $trap = Trap::where('hardware_id', $trapId)->firstOrFail();

        if ($trap === null) {
            throw new \DomainException("Trap not found: {$trapId}");
        }

        $filename = now()->format('Y-m-d_H-i-s').'_'.uniqid().'.jpg';
        $path = "trap-photos/{$trapId}/{$filename}";

        Storage::put($path, $imageData);

        return TrapPhoto::create([
            'trap_id' => $trapId,
            'file_path' => $path,
            'file_size' => strlen($imageData),
            'captured_at' => $capturedAt,
        ]);
    }
}
