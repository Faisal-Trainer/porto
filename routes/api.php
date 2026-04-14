<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\McpController;

// routes/api.php
Route::match(['get', 'post'], '/mcp', [McpController::class, 'handle']);
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
