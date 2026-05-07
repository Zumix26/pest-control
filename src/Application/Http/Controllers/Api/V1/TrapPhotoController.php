<?php

declare(strict_types=1);

namespace App\Application\Http\Controllers\Api\V1;

use App\Application\Http\Resources\TrapPhotoResource;
use App\Application\UseCases\UploadTrapPhotoUseCase;
use App\Domain\Monitoring\Models\TrapPhoto;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

final class TrapPhotoController extends Controller
{
    public function __construct(
        private readonly UploadTrapPhotoUseCase $uploadUseCase,
    ) {}

    /**
     * @throws \DateMalformedStringException
     */
    public function store(Request $request): JsonResponse
    {
        $apiKey = $request->header('X-Api-Key');

        if ($apiKey !== config('app.trap_photo_api_key')) {
            return response()->json(['error' => 'Invalid API key'], 401);
        }

        $trapId = $request->header('X-Trap-Id');

        if (empty($trapId)) {
            return response()->json(['error' => 'Missing X-Trap-Id header'], 422);
        }

        $imageData = $request->getContent();

        if (empty($imageData)) {
            return response()->json(['error' => 'Empty image body'], 422);
        }

        $capturedAt = $request->header('X-Captured-At')
            ? new \DateTimeImmutable($request->header('X-Captured-At'))
            : new \DateTimeImmutable();

        $photo = $this->uploadUseCase->execute($trapId, $imageData, $capturedAt);

        return new TrapPhotoResource($photo)
            ->response()
            ->setStatusCode(201);
    }

    public function index(string $trapId): AnonymousResourceCollection
    {
        $photos = TrapPhoto::where('trap_id', $trapId)
            ->latest('captured_at')
            ->get();

        return TrapPhotoResource::collection($photos);
    }

    public function serve(string $id): StreamedResponse|JsonResponse
    {
        $photo = TrapPhoto::find($id);

        if ($photo === null || ! Storage::exists($photo->file_path)) {
            return response()->json(['error' => 'Photo not found'], 404);
        }

        return Storage::response($photo->file_path, null, ['Content-Type' => 'image/jpeg']);
    }
}
