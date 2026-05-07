<?php

declare(strict_types=1);

namespace App\Application\Http\Resources;

use App\Domain\Monitoring\Models\TrapPhoto;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property TrapPhoto $resource
 */
final class TrapPhotoResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'trap_id' => $this->resource->trap_id,
            'photo_url' => url("/api/v1/trap-photos/{$this->resource->id}/image"),
            'file_size' => $this->resource->file_size,
            'captured_at' => $this->resource->captured_at->format(\DateTimeInterface::ATOM),
            'ai_result' => $this->resource->ai_result,
            'created_at' => $this->resource->created_at->format(\DateTimeInterface::ATOM),
        ];
    }
}
