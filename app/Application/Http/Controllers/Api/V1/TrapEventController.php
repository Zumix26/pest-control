<?php

declare(strict_types=1);

namespace App\Application\Http\Controllers\Api\V1;

use App\Application\DTOs\TrapEventDTO;
use App\Application\Http\Requests\RegisterTrapEventRequest;
use App\Application\Http\Resources\TrapEventResource;
use App\Application\UseCases\RegisterTrapEventUseCase;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

final class TrapEventController extends Controller
{
    public function __construct(
        private readonly RegisterTrapEventUseCase $registerTrapEventUseCase,
    ) {}

    public function store(RegisterTrapEventRequest $request): JsonResponse
    {
        $dto = TrapEventDTO::fromRequest($request);
        $event = $this->registerTrapEventUseCase->execute($dto);

        return (new TrapEventResource($event))
            ->response()
            ->setStatusCode(201);
    }
}
