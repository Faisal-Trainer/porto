<?php

use App\Http\Controllers\McpController;
use App\Http\Middleware\McpTokenMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// routes/api.php
Route::match(['get', 'post'], '/mcp', [McpController::class, 'handle'])
    ->middleware(McpTokenMiddleware::class);
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
