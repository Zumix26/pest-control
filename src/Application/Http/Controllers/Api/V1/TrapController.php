<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\V1;

use App\DTOs\CreateTrapDTO;
use App\DTOs\TrapEventDTO;
use App\Http\Requests\CreateTrapRequest;
use App\Http\Resources\TrapEventResource;
use App\Http\Resources\TrapResource;
use App\Monitoring\UseCases\Facilities\DeleteFacilityUseCase;
use App\Monitoring\UseCases\Traps\CreateTrapUseCase;
use App\Monitoring\UseCases\Traps\DeleteTrapUseCase;
use App\Monitoring\UseCases\Traps\RegisterTrapEventUseCase;
use Domain\Monitoring\Enums\TrapStatus;
use Domain\Monitoring\Enums\TrapType;
use Domain\Monitoring\Models\Trap;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;
use OpenApi\Attributes as OA;

final class TrapController extends Controller
{
    public function __construct(
        private readonly CreateTrapUseCase $createTrapUseCase,
        private readonly RegisterTrapEventUseCase $registerTrapEventUseCase,
        private readonly DeleteTrapUseCase $deleteTrapUseCase,
    ) {}

    #[OA\Get(
        path: '/v1/traps',
        operationId: 'getTraps',
        description: 'Получить список всех ловушек с возможностью фильтрации по статусу, типу или шлюзу',
        summary: 'Список ловушек',
        tags: ['Traps'],
        parameters: [
            new OA\Parameter(
                name: 'status',
                description: 'Фильтр по статусу ловушки',
                in: 'query',
                required: false,
                schema: new OA\Schema(
                    type: 'string',
                    enum: ['active', 'inactive', 'maintenance', 'faulty']
                )
            ),
            new OA\Parameter(
                name: 'type',
                description: 'Фильтр по типу ловушки',
                in: 'query',
                required: false,
                schema: new OA\Schema(
                    type: 'string',
                    enum: ['rat', 'mouse', 'insect']
                )
            ),
            new OA\Parameter(
                name: 'gateway_id',
                description: 'Фильтр по UUID шлюза',
                in: 'query',
                required: false,
                schema: new OA\Schema(type: 'string', format: 'uuid')
            )
        ],
        responses: [
            new OA\Response(
                response: 200,
                description: 'Успешный ответ',
                content: new OA\JsonContent(
                    type: 'array',
                    items: new OA\Items(ref: '#/components/schemas/TrapResource')
                )
            )
        ]
    )]
    public function index(Request $request): AnonymousResourceCollection
    {
        $status = $request->query('status');
        $type = $request->query('type');
        $gatewayId = $request->query('gateway_id');

        $traps = Trap::query()
            ->when($status !== null, fn ($q) => $q->where('status', TrapStatus::from($status)))
            ->when($type !== null, fn ($q) => $q->where('type', TrapType::from($type)))
            ->when($gatewayId !== null, fn ($q) => $q->where('gateway_id', $gatewayId))
            ->get();

        return TrapResource::collection($traps);
    }

    #[OA\Get(
        path: '/v1/traps/{id}',
        operationId: 'getTrapById',
        description: 'Получить детальную информацию о ловушке по её ID',
        summary: 'Детали ловушки',
        tags: ['Traps'],
        parameters: [
            new OA\Parameter(
                name: 'id',
                description: 'UUID ловушки',
                in: 'path',
                required: true,
                schema: new OA\Schema(type: 'string', format: 'uuid')
            )
        ],
        responses: [
            new OA\Response(
                response: 200,
                description: 'Успешный ответ',
                content: new OA\JsonContent(ref: '#/components/schemas/TrapResource')
            ),
            new OA\Response(
                response: 404,
                description: 'Ловушка не найдена',
                content: new OA\JsonContent(
                    properties: [
                        new OA\Property(property: 'message', type: 'string', example: 'Trap not found')
                    ]
                )
            )
        ]
    )]
    public function show(string $id): TrapResource
    {
        $trap = Trap::find($id);

        if ($trap === null) {
            abort(404, 'Trap not found');
        }

        return new TrapResource($trap);
    }

    #[OA\Post(
        path: '/v1/traps',
        operationId: 'createTrap',
        description: 'Создать новую ловушку в системе',
        summary: 'Создать ловушку',
        requestBody: new OA\RequestBody(
            required: true,
            content: new OA\JsonContent(ref: '#/components/schemas/CreateTrapRequest')
        ),
        tags: ['Traps'],
        responses: [
            new OA\Response(
                response: 201,
                description: 'Ловушка успешно создана',
                content: new OA\JsonContent(ref: '#/components/schemas/TrapResource')
            ),
            new OA\Response(
                response: 422,
                description: 'Ошибка валидации',
                content: new OA\JsonContent(
                    properties: [
                        new OA\Property(property: 'message', type: 'string', example: 'The hardware id has already been taken.'),
                        new OA\Property(
                            property: 'errors',
                            type: 'object',
                            example: ['hardware_id' => ['The hardware id has already been taken.']]
                        )
                    ]
                )
            )
        ]
    )]
    public function store(CreateTrapRequest $request): JsonResponse
    {
        $dto = CreateTrapDTO::fromRequest($request);
        $trap = $this->createTrapUseCase->execute($dto);

        return (new TrapResource($trap))
            ->response()
            ->setStatusCode(201);
    }

    public function destroy(string $id): JsonResponse
    {
        $this->deleteTrapUseCase->execute($id);

        return response()->json(null, 204);
    }



    #[OA\Post(
        path: '/v1/traps/{id}/test-trigger',
        operationId: 'testTriggerTrap',
        description: 'Тестовый endpoint для симуляции срабатывания ловушки без HMAC проверки.',
        summary: 'Тестовое срабатывание ловушки',
        tags: ['Traps'],
        parameters: [
            new OA\Parameter(
                name: 'id',
                description: 'UUID ловушки',
                in: 'path',
                required: true,
                schema: new OA\Schema(type: 'string', format: 'uuid')
            )
        ],
        responses: [
            new OA\Response(
                response: 201,
                description: 'Событие успешно создано',
                content: new OA\JsonContent(ref: '#/components/schemas/TrapEventResource')
            ),
            new OA\Response(
                response: 404,
                description: 'Ловушка не найдена',
                content: new OA\JsonContent(
                    properties: [
                        new OA\Property(property: 'message', type: 'string', example: 'Trap not found')
                    ]
                )
            )
        ]
    )]

    public function testTrigger(string $id): JsonResponse
    {
        $dto = new TrapEventDTO(
            trapId: $id,
            caughtAt: new \DateTimeImmutable(),
            batteryLevel: 85,
            rssi: -65,
            metadata: [
                'test' => true,
                'battery_level' => 85,
                'rssi' => -65,
                'triggered_at' => (new \DateTimeImmutable())->format(\DateTimeInterface::ATOM),
            ],
        );

        $event = $this->registerTrapEventUseCase->execute($dto);

        return (new TrapEventResource($event))
            ->response()
            ->setStatusCode(201);
    }
}
