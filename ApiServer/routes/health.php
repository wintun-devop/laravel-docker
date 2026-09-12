<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HealthCheckController;

Route::get('/health', [HealthCheckController::class, 'healthcheck']);

Route::get('/server-info', function () {
    return response()->json($_SERVER);
});

Route::get('/server-summary', function () {
    return response()->json([
        'php_version' => PHP_VERSION,
        'extensions'  => get_loaded_extensions(),
        'os'          => PHP_OS,
        'server'      => $_SERVER['SERVER_SOFTWARE'] ?? null,
    ]);
});
