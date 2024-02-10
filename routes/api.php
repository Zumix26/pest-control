<?php

declare(strict_types=1);

use App\Application\Http\Controllers\Api\V1\GatewayController;
use App\Application\Http\Controllers\Api\V1\TrapController;
use App\Application\Http\Controllers\Api\V1\TrapEventController;
use App\Application\Http\Middleware\ValidateGatewaySignature;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    // Public Gateway endpoints
    Route::get('gateways', [GatewayController::class, 'index']);
    Route::get('gateways/{id}', [GatewayController::class, 'show']);
    Route::post('gateways', [GatewayController::class, 'store']);

    // Public Trap endpoints
    Route::get('traps', [TrapController::class, 'index']);
    Route::get('traps/{id}', [TrapController::class, 'show']);
    Route::post('traps', [TrapController::class, 'store']);

    // Protected IoT endpoints (HMAC validation)
    Route::middleware([ValidateGatewaySignature::class])->group(function () {
        Route::post('trap-events', [TrapEventController::class, 'store']);
    });
});
