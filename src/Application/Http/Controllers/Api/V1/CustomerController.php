<?php

declare(strict_types=1);

namespace App\Application\Http\Controllers\Api\V1;

use App\Application\DTOs\CreateCustomerDTO;
use App\Application\DTOs\UpdateCustomerDTO;
use App\Application\Http\Requests\CreateCustomerRequest;
use App\Application\Http\Requests\UpdateCustomerRequest;
use App\Application\Http\Resources\CustomerResource;
use App\Application\Http\Resources\CustomerWithFacilitiesResource;
use App\Application\Http\Resources\FacilityResource;
use App\Application\Monitoring\Queries\GetCustomerQuery;
use App\Application\Monitoring\Queries\ListCustomersQuery;
use App\Application\Monitoring\UseCases\CreateCustomerUseCase;
use App\Application\Monitoring\UseCases\DeleteCustomerUseCase;
use App\Application\Monitoring\UseCases\UpdateCustomerUseCase;
use App\Domain\Monitoring\Enums\CustomerStatus;
use App\Domain\Monitoring\Enums\CustomerType;
use App\Domain\Monitoring\Models\Facility;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use OpenApi\Attributes as OA;

final readonly class CustomerController
{
    public function __construct(
        private CreateCustomerUseCase $createCustomerUseCase,
        private UpdateCustomerUseCase $updateCustomerUseCase,
        private DeleteCustomerUseCase $deleteCustomerUseCase,
        private GetCustomerQuery $getCustomerQuery,
        private ListCustomersQuery $listCustomersQuery,
    ) {}

    #[OA\Get(
        path: '/v1/customers',
        summary: 'List all customers',
        tags: ['Customers'],
        parameters: [
            new OA\Parameter(
                name: 'status',
                in: 'query',
                required: false,
                schema: new OA\Schema(type: 'string', enum: ['active', 'inactive'])
            ),
            new OA\Parameter(
                name: 'type',
                in: 'query',
                required: false,
                schema: new OA\Schema(type: 'string', enum: ['individual', 'company'])
            ),
        ],
        responses: [
            new OA\Response(
                response: 200,
                description: 'List of customers',
                content: new OA\JsonContent(
                    type: 'array',
                    items: new OA\Items(ref: '#/components/schemas/CustomerResource')
                )
            ),
        ]
    )]
    public function index(Request $request): AnonymousResourceCollection
    {
        $status = $request->has('status')
            ? CustomerStatus::from($request->string('status')->toString())
            : null;

        $type = $request->has('type')
            ? CustomerType::from($request->string('type')->toString())
            : null;

        $customers = $this->listCustomersQuery->execute($status, $type);

        return CustomerResource::collection($customers);
    }

    #[OA\Get(
        path: '/v1/customers/{id}',
        summary: 'Get customer by ID with facilities',
        tags: ['Customers'],
        parameters: [
            new OA\Parameter(
                name: 'id',
                in: 'path',
                required: true,
                schema: new OA\Schema(type: 'string', format: 'uuid')
            ),
        ],
        responses: [
            new OA\Response(
                response: 200,
                description: 'Customer details with facilities',
                content: new OA\JsonContent(ref: '#/components/schemas/CustomerWithFacilitiesResource')
            ),
            new OA\Response(response: 404, description: 'Customer not found'),
        ]
    )]
    public function show(string $id): CustomerWithFacilitiesResource|JsonResponse
    {
        $result = $this->getCustomerQuery->execute($id);

        if ($result === null) {
            return response()->json(['message' => 'Customer not found'], 404);
        }

        return new CustomerWithFacilitiesResource($result);
    }

    #[OA\Post(
        path: '/v1/customers',
        summary: 'Create a new customer',
        requestBody: new OA\RequestBody(
            required: true,
            content: new OA\JsonContent(ref: '#/components/schemas/CreateCustomerRequest')
        ),
        tags: ['Customers'],
        responses: [
            new OA\Response(
                response: 201,
                description: 'Customer created successfully',
                content: new OA\JsonContent(ref: '#/components/schemas/CustomerResource')
            ),
            new OA\Response(response: 422, description: 'Validation error'),
        ]
    )]
    public function store(CreateCustomerRequest $request): JsonResponse
    {
        $dto = CreateCustomerDTO::fromRequest($request);
        $customer = $this->createCustomerUseCase->execute($dto);

        return new CustomerResource($customer)
            ->response()
            ->setStatusCode(201);
    }

    #[OA\Put(
        path: '/v1/customers/{id}',
        summary: 'Update customer',
        requestBody: new OA\RequestBody(
            required: true,
            content: new OA\JsonContent(ref: '#/components/schemas/UpdateCustomerRequest')
        ),
        tags: ['Customers'],
        parameters: [
            new OA\Parameter(
                name: 'id',
                in: 'path',
                required: true,
                schema: new OA\Schema(type: 'string', format: 'uuid')
            ),
        ],
        responses: [
            new OA\Response(
                response: 200,
                description: 'Customer updated successfully',
                content: new OA\JsonContent(ref: '#/components/schemas/CustomerResource')
            ),
            new OA\Response(response: 404, description: 'Customer not found'),
            new OA\Response(response: 422, description: 'Validation error'),
        ]
    )]
    public function update(string $id, UpdateCustomerRequest $request): CustomerResource
    {
        $dto = UpdateCustomerDTO::fromRequest($id, $request);
        $customer = $this->updateCustomerUseCase->execute($dto);

        return new CustomerResource($customer);
    }

    #[OA\Delete(
        path: '/v1/customers/{id}',
        description: 'Soft deletes the customer, all its facilities, and sets all gateways and traps to IN_STOCK status',
        summary: 'Delete customer (soft delete with cascade)',
        tags: ['Customers'],
        parameters: [
            new OA\Parameter(
                name: 'id',
                in: 'path',
                required: true,
                schema: new OA\Schema(type: 'string', format: 'uuid')
            ),
        ],
        responses: [
            new OA\Response(response: 204, description: 'Customer deleted successfully'),
            new OA\Response(response: 404, description: 'Customer not found'),
        ]
    )]
    public function destroy(string $id): JsonResponse
    {
        $this->deleteCustomerUseCase->execute($id);

        return response()->json(null, 204);
    }

    #[OA\Get(
        path: '/v1/customers/{id}/facilities',
        summary: 'List all facilities for a customer',
        tags: ['Customers'],
        parameters: [
            new OA\Parameter(
                name: 'id',
                in: 'path',
                required: true,
                schema: new OA\Schema(type: 'string', format: 'uuid')
            ),
        ],
        responses: [
            new OA\Response(
                response: 200,
                description: 'List of facilities',
                content: new OA\JsonContent(
                    type: 'array',
                    items: new OA\Items(ref: '#/components/schemas/FacilityResource')
                )
            ),
        ]
    )]
    public function facilities(string $id): AnonymousResourceCollection
    {
        $facilities = Facility::query()
            ->where('customer_id', $id)
            ->orderBy('name')
            ->get();

        return FacilityResource::collection($facilities);
    }
}
