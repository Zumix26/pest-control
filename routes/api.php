<?php

declare(strict_types=1);

use App\Http\Controllers\Api\V1\CustomerController;
use App\Http\Controllers\Api\V1\FacilityController;
use App\Http\Controllers\Api\V1\GatewayController;
use App\Http\Controllers\Api\V1\TrapController;
use App\Http\Controllers\Api\V1\TrapEventController;
use App\Http\Controllers\Api\V1\TrapPhotoController;
use App\Application\Http\Middleware\ValidateGatewaySignature;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    // Public Gateway endpoints
    Route::get('gateways', [GatewayController::class, 'index']);
    Route::get('gateways/{id}', [GatewayController::class, 'show']);
    Route::post('gateways', [GatewayController::class, 'store']);
    Route::put('gateways/{id}', [GatewayController::class, 'update']);
    Route::delete('gateways/{id}', [GatewayController::class, 'destroy']);

    // Public Trap endpoints
    Route::get('traps', [TrapController::class, 'index']);
    Route::get('traps/{id}', [TrapController::class, 'show']);
    Route::post('traps', [TrapController::class, 'store']);
    Route::put('traps/{id}', [TrapController::class, 'update']);
    Route::delete('traps/{id}', [TrapController::class, 'destroy']);

    // Test endpoint - trigger trap without HMAC
    Route::post('traps/{id}/test-trigger', [TrapController::class, 'testTrigger']);

    // Facility endpoints
    Route::get('facilities', [FacilityController::class, 'index']);
    Route::get('facilities/{id}', [FacilityController::class, 'show']);
    Route::post('facilities', [FacilityController::class, 'store']);
    Route::put('facilities/{id}', [FacilityController::class, 'update']);
    Route::delete('facilities/{id}', [FacilityController::class, 'destroy']);
    Route::get('facilities/{id}/gateways', [FacilityController::class, 'gateways']);

    // Customer endpoints
    Route::get('customers', [CustomerController::class, 'index']);
    Route::get('customers/{id}', [CustomerController::class, 'show']);
    Route::post('customers', [CustomerController::class, 'store']);
    Route::put('customers/{id}', [CustomerController::class, 'update']);
    Route::delete('customers/{id}', [CustomerController::class, 'destroy']);
    Route::get('customers/{id}/facilities', [CustomerController::class, 'facilities']);

    // Public Trap Event endpoints
    Route::get('trap-events', [TrapEventController::class, 'index']);
    Route::post('trap-events', [TrapEventController::class, 'store']);

    // Trap photo endpoints (ESP32-CAM)
    Route::post('trap-photos', [TrapPhotoController::class, 'store']);
    Route::get('traps/{trapId}/photos', [TrapPhotoController::class, 'index']);
    Route::get('trap-photos/{id}/image', [TrapPhotoController::class, 'serve']);

});
