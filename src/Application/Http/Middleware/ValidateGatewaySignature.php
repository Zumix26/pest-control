<?php

declare(strict_types=1);

namespace App\Application\Http\Middleware;

use App\Domain\Monitoring\Repositories\GatewayRepositoryInterface;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

final class ValidateGatewaySignature
{
    public function __construct(
        private readonly GatewayRepositoryInterface $gatewayRepository,
    ) {}

    public function handle(Request $request, Closure $next): Response
    {
        $apiKey = $request->header('X-Gateway-Key');

        if (empty($apiKey)) {
            return response()->json([
                'error' => 'Missing X-Gateway-Key header',
            ], 401);
        }

        $gateway = $this->gatewayRepository->findByApiKey($apiKey);

        if ($gateway === null) {
            return response()->json([
                'error' => 'Invalid API key',
            ], 401);
        }

        $signature = $request->header('X-Gateway-Signature');

        if (empty($signature)) {
            return response()->json([
                'error' => 'Missing X-Gateway-Signature header',
            ], 401);
        }

        $payload = $request->getContent();

        if (! $gateway->validateSignature($payload, $signature)) {
            return response()->json([
                'error' => 'Invalid signature',
            ], 401);
        }

        $gateway->updateLastSeen();
        $this->gatewayRepository->save($gateway);

        $request->attributes->set('gateway', $gateway);

        return $next($request);
    }
}
