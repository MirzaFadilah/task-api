<?php

use App\Http\Controllers\Api\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/hello', function(){
    return 'halo dari BTNG 2026';
});

Route::get('/info', function() {
    return response()->json([
        'app' => 'Task API',
        'version' => '1.0',
        'author' => 'BTNG DNCC 2026',
    ]);
});

Route::get('/tasks', [TaskController::class, 'index']);

Route::get('/tasks/{id}', [TaskController::class, 'show']);

Route::post('/tasks', [TaskController::class, 'store']);

Route::post('/tasks/{id}', [TaskController::class, 'store']);

Route::put('/tasks/{id}', [TaskController::class, 'update']);

Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);