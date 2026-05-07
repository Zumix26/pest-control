<?php

declare(strict_types=1);

namespace App\Application\Http\Controllers\Api\V1;

use App\Application\DTOs\TrapEventDTO;
use App\Application\Http\Requests\RegisterTrapEventRequest;
use App\Application\Http\Resources\TrapEventResource;
use App\Application\UseCases\RegisterTrapEventUseCase;
use App\Domain\Monitoring\Models\TrapEvent;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;
use OpenApi\Attributes as OA;

final class TrapEventController extends Controller
{
    public function __construct(
        private readonly RegisterTrapEventUseCase $registerTrapEventUseCase,
    ) {}

    #[OA\Post(
        path: '/v1/trap-events',
        operationId: 'registerTrapEvent',
        description: 'Зарегистрировать событие срабатывания ловушки. Требует HMAC подпись в заголовке X-Signature для аутентификации IoT устройства.',
        summary: 'Зарегистрировать событие ловушки',
        security: [['HmacSignature' => []]],
        requestBody: new OA\RequestBody(
            required: true,
            content: new OA\JsonContent(ref: '#/components/schemas/RegisterTrapEventRequest')
        ),
        tags: ['Trap Events'],
        responses: [
            new OA\Response(
                response: 201,
                description: 'Событие успешно зарегистрировано',
                content: new OA\JsonContent(ref: '#/components/schemas/TrapEventResource')
            ),
            new OA\Response(
                response: 401,
                description: 'Неверная или отсутствующая HMAC подпись',
                content: new OA\JsonContent(
                    properties: [
                        new OA\Property(property: 'message', type: 'string', example: 'Invalid signature'),
                    ]
                )
            ),
            new OA\Response(
                response: 422,
                description: 'Ошибка валидации',
                content: new OA\JsonContent(
                    properties: [
                        new OA\Property(property: 'message', type: 'string', example: 'The trap id field is required.'),
                        new OA\Property(
                            property: 'errors',
                            type: 'object',
                            example: ['trap_id' => ['The trap id field is required.']]
                        ),
                    ]
                )
            ),
        ]
    )]
    public function store(RegisterTrapEventRequest $request): JsonResponse
    {
        $dto = TrapEventDTO::fromRequest($request);
        $event = $this->registerTrapEventUseCase->execute($dto);

        return new TrapEventResource($event)
            ->response()
            ->setStatusCode(201);
    }

    public function index(Request $request): AnonymousResourceCollection
    {
        $events = TrapEvent::query()->latest('created_at')->limit(100)->get();

        return TrapEventResource::collection($events);
    }
}
