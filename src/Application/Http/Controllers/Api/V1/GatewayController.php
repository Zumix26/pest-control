<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\V1;

use App\DTOs\CreateGatewayDTO;
use App\Http\Requests\CreateGatewayRequest;
use App\Http\Resources\GatewayResource;
use App\Monitoring\UseCases\Gateways\CreateGatewayUseCase;
use Domain\Monitoring\Enums\GatewayStatus;
use Domain\Monitoring\Models\Gateway;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;
use OpenApi\Attributes as OA;

final class GatewayController extends Controller
{
    public function __construct(
        private readonly CreateGatewayUseCase $createGatewayUseCase,
    ) {}

    #[OA\Get(
        path: '/v1/gateways',
        operationId: 'getGateways',
        description: 'Получить список всех IoT шлюзов с возможностью фильтрации по статусу',
        summary: 'Список шлюзов',
        tags: ['Gateways'],
        parameters: [
            new OA\Parameter(
                name: 'status',
                description: 'Фильтр по статусу шлюза',
                in: 'query',
                required: false,
                schema: new OA\Schema(
                    type: 'string',
                    enum: ['online', 'offline', 'maintenance']
                )
            ),
        ],
        responses: [
            new OA\Response(
                response: 200,
                description: 'Успешный ответ',
                content: new OA\JsonContent(
                    type: 'array',
                    items: new OA\Items(ref: '#/components/schemas/GatewayResource')
                )
            ),
        ]
    )]
    public function index(Request $request): AnonymousResourceCollection
    {
        $status = $request->query('status');

        $gateways = Gateway::query()
            ->when($status !== null, fn ($q) => $q->where('status', GatewayStatus::from($status)))
            ->get();

        return GatewayResource::collection($gateways);
    }

    #[OA\Get(
        path: '/v1/gateways/{id}',
        operationId: 'getGatewayById',
        description: 'Получить детальную информацию об IoT шлюзе по его ID',
        summary: 'Детали шлюза',
        tags: ['Gateways'],
        parameters: [
            new OA\Parameter(
                name: 'id',
                description: 'UUID шлюза',
                in: 'path',
                required: true,
                schema: new OA\Schema(type: 'string', format: 'uuid')
            ),
        ],
        responses: [
            new OA\Response(
                response: 200,
                description: 'Успешный ответ',
                content: new OA\JsonContent(ref: '#/components/schemas/GatewayResource')
            ),
            new OA\Response(
                response: 404,
                description: 'Шлюз не найден',
                content: new OA\JsonContent(
                    properties: [
                        new OA\Property(property: 'message', type: 'string', example: 'Gateway not found'),
                    ]
                )
            ),
        ]
    )]
    public function show(string $id): GatewayResource
    {
        $gateway = Gateway::find($id);

        if ($gateway === null) {
            abort(404, 'Gateway not found');
        }

        return new GatewayResource($gateway);
    }

    #[OA\Post(
        path: '/v1/gateways',
        operationId: 'createGateway',
        description: 'Создать новый IoT шлюз в системе',
        summary: 'Создать шлюз',
        requestBody: new OA\RequestBody(
            required: true,
            content: new OA\JsonContent(ref: '#/components/schemas/CreateGatewayRequest')
        ),
        tags: ['Gateways'],
        responses: [
            new OA\Response(
                response: 201,
                description: 'Шлюз успешно создан',
                content: new OA\JsonContent(ref: '#/components/schemas/GatewayResource')
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
                        ),
                    ]
                )
            ),
        ]
    )]
    public function store(CreateGatewayRequest $request): JsonResponse
    {
        $dto = CreateGatewayDTO::fromRequest($request);
        $gateway = $this->createGatewayUseCase->execute($dto);

        return new GatewayResource($gateway)
            ->response()
            ->setStatusCode(201);
    }
}
