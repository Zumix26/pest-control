<?php

declare(strict_types=1);

namespace App\Application\Http\Controllers\Api\V1;

use App\DTOs\CreateFacilityDTO;
use App\DTOs\UpdateFacilityDTO;
use App\Application\Http\Requests\CreateFacilityRequest;
use App\Application\Http\Requests\UpdateFacilityRequest;
use App\Http\Resources\FacilityResource;
use App\Http\Resources\FacilityWithGatewaysResource;
use App\Http\Resources\GatewayResource;
use App\Application\Monitoring\Queries\GetFacilityQuery;
use App\Application\Monitoring\Queries\ListFacilitiesQuery;
use App\Application\Monitoring\UseCases\CreateFacilityUseCase;
use App\Application\Monitoring\UseCases\DeleteFacilityUseCase;
use App\Application\Monitoring\UseCases\UpdateFacilityUseCase;
use App\Domain\Monitoring\Enums\FacilityStatus;
use App\Domain\Monitoring\Enums\FacilityType;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;
use OpenApi\Attributes as OA;

final class FacilityController extends Controller
{
    public function __construct(
        private readonly CreateFacilityUseCase $createFacilityUseCase,
        private readonly UpdateFacilityUseCase $updateFacilityUseCase,
        private readonly DeleteFacilityUseCase $deleteFacilityUseCase,
        private readonly ListFacilitiesQuery $listFacilitiesQuery,
        private readonly GetFacilityQuery $getFacilityQuery,
    ) {}

    #[OA\Get(
        path: '/v1/facilities',
        operationId: 'getFacilities',
        summary: 'List facilities',
        tags: ['Facilities'],
        parameters: [
            new OA\Parameter(name: 'status', in: 'query', schema: new OA\Schema(type: 'string', enum: ['active', 'inactive'])),
            new OA\Parameter(name: 'type', in: 'query', schema: new OA\Schema(type: 'string', enum: ['warehouse', 'restaurant', 'office', 'retail', 'industrial'])),
        ],
        responses: [
            new OA\Response(response: 200, description: 'Success', content: new OA\JsonContent(type: 'array', items: new OA\Items(ref: '#/components/schemas/FacilityResource'))),
        ]
    )]
    public function index(Request $request): AnonymousResourceCollection
    {
        $status = $request->query('status') ? FacilityStatus::from($request->query('status')) : null;
        $type = $request->query('type') ? FacilityType::from($request->query('type')) : null;

        $facilities = $this->listFacilitiesQuery->execute($status, $type);

        return FacilityResource::collection($facilities);
    }

    #[OA\Get(
        path: '/v1/facilities/{id}',
        operationId: 'getFacilityById',
        summary: 'Get facility details',
        tags: ['Facilities'],
        parameters: [
            new OA\Parameter(name: 'id', in: 'path', required: true, schema: new OA\Schema(type: 'string', format: 'uuid')),
        ],
        responses: [
            new OA\Response(response: 200, description: 'Success', content: new OA\JsonContent(ref: '#/components/schemas/FacilityWithGatewaysResource')),
            new OA\Response(response: 404, description: 'Not found'),
        ]
    )]
    public function show(string $id): FacilityWithGatewaysResource
    {
        $result = $this->getFacilityQuery->execute($id);

        if ($result === null) {
            abort(404, 'Facility not found');
        }

        return new FacilityWithGatewaysResource($result);
    }

    #[OA\Post(
        path: '/v1/facilities',
        operationId: 'createFacility',
        summary: 'Create facility',
        requestBody: new OA\RequestBody(required: true, content: new OA\JsonContent(ref: '#/components/schemas/CreateFacilityRequest')),
        tags: ['Facilities'],
        responses: [
            new OA\Response(response: 201, description: 'Created', content: new OA\JsonContent(ref: '#/components/schemas/FacilityResource')),
        ]
    )]
    public function store(CreateFacilityRequest $request): JsonResponse
    {
        $dto = CreateFacilityDTO::fromRequest($request);
        $facility = $this->createFacilityUseCase->execute($dto);

        return (new FacilityResource($facility))
            ->response()
            ->setStatusCode(201);
    }

    #[OA\Put(
        path: '/v1/facilities/{id}',
        operationId: 'updateFacility',
        summary: 'Update facility',
        requestBody: new OA\RequestBody(required: true, content: new OA\JsonContent(ref: '#/components/schemas/UpdateFacilityRequest')),
        tags: ['Facilities'],
        parameters: [
            new OA\Parameter(name: 'id', in: 'path', required: true, schema: new OA\Schema(type: 'string', format: 'uuid')),
        ],
        responses: [
            new OA\Response(response: 200, description: 'Updated', content: new OA\JsonContent(ref: '#/components/schemas/FacilityResource')),
        ]
    )]
    public function update(string $id, UpdateFacilityRequest $request): FacilityResource
    {
        $dto = UpdateFacilityDTO::fromRequest($id, $request);
        $facility = $this->updateFacilityUseCase->execute($dto);

        return new FacilityResource($facility);
    }

    #[OA\Delete(
        path: '/v1/facilities/{id}',
        operationId: 'deleteFacility',
        summary: 'Delete facility',
        tags: ['Facilities'],
        parameters: [
            new OA\Parameter(name: 'id', in: 'path', required: true, schema: new OA\Schema(type: 'string', format: 'uuid')),
        ],
        responses: [
            new OA\Response(response: 204, description: 'Deleted'),
        ]
    )]
    public function destroy(string $id): JsonResponse
    {
        $this->deleteFacilityUseCase->execute($id);

        return response()->json(null, 204);
    }

    #[OA\Get(
        path: '/v1/facilities/{id}/gateways',
        operationId: 'getFacilityGateways',
        summary: 'Get facility gateways',
        tags: ['Facilities'],
        parameters: [
            new OA\Parameter(name: 'id', in: 'path', required: true, schema: new OA\Schema(type: 'string', format: 'uuid')),
        ],
        responses: [
            new OA\Response(response: 200, description: 'Success', content: new OA\JsonContent(type: 'array', items: new OA\Items(ref: '#/components/schemas/GatewayResource'))),
        ]
    )]
    public function gateways(string $id): AnonymousResourceCollection
    {
        $result = $this->getFacilityQuery->execute($id);

        if ($result === null) {
            abort(404, 'Facility not found');
        }

        return GatewayResource::collection($result['gateways']);
    }
}
