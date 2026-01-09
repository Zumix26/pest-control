<?php

declare(strict_types=1);

namespace App\Application\Http\Controllers\Api\V1;

use App\Application\DTOs\CreateTrapDTO;
use App\Application\Http\Requests\CreateTrapRequest;
use App\Application\Http\Resources\TrapResource;
use App\Application\UseCases\CreateTrapUseCase;
use App\Domain\Monitoring\Enums\TrapStatus;
use App\Domain\Monitoring\Enums\TrapType;
use App\Domain\Monitoring\Repositories\TrapRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;

final class TrapController extends Controller
{
    public function __construct(
        private readonly TrapRepositoryInterface $trapRepository,
        private readonly CreateTrapUseCase $createTrapUseCase,
    ) {}

    public function index(Request $request): AnonymousResourceCollection
    {
        $status = $request->query('status');
        $type = $request->query('type');
        $gatewayId = $request->query('gateway_id');

        if ($status !== null) {
            $traps = $this->trapRepository->findByStatus(TrapStatus::from($status));
        } elseif ($type !== null) {
            $traps = $this->trapRepository->findByType(TrapType::from($type));
        } elseif ($gatewayId !== null) {
            $traps = $this->trapRepository->findByGatewayId($gatewayId);
        } else {
            $traps = $this->trapRepository->findAll();
        }

        return TrapResource::collection($traps);
    }

    public function show(string $id): TrapResource
    {
        $trap = $this->trapRepository->findById($id);

        if ($trap === null) {
            abort(404, 'Trap not found');
        }

        return new TrapResource($trap);
    }

    public function store(CreateTrapRequest $request): JsonResponse
    {
        $dto = CreateTrapDTO::fromRequest($request);
        $trap = $this->createTrapUseCase->execute($dto);

        return (new TrapResource($trap))
            ->response()
            ->setStatusCode(201);
    }
}
