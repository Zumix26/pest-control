<?php

declare(strict_types=1);

namespace App\Application\Http\Controllers\Api\V1;

use App\Application\DTOs\CreateGatewayDTO;
use App\Application\Http\Requests\CreateGatewayRequest;
use App\Application\Http\Resources\GatewayResource;
use App\Application\UseCases\CreateGatewayUseCase;
use App\Domain\Monitoring\Enums\GatewayStatus;
use App\Domain\Monitoring\Repositories\GatewayRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;

final class GatewayController extends Controller
{
    public function __construct(
        private readonly GatewayRepositoryInterface $gatewayRepository,
        private readonly CreateGatewayUseCase $createGatewayUseCase,
    ) {}

    public function index(Request $request): AnonymousResourceCollection
    {
        $status = $request->query('status');

        if ($status !== null) {
            $gateways = $this->gatewayRepository->findByStatus(GatewayStatus::from($status));
        } else {
            $gateways = $this->gatewayRepository->findAll();
        }

        return GatewayResource::collection($gateways);
    }

    public function show(string $id): GatewayResource
    {
        $gateway = $this->gatewayRepository->findById($id);

        if ($gateway === null) {
            abort(404, 'Gateway not found');
        }

        return new GatewayResource($gateway);
    }

    public function store(CreateGatewayRequest $request): JsonResponse
    {
        $dto = CreateGatewayDTO::fromRequest($request);
        $gateway = $this->createGatewayUseCase->execute($dto);

        return (new GatewayResource($gateway))
            ->response()
            ->setStatusCode(201);
    }
}
