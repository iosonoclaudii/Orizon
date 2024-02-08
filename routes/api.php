<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaesiController;
use App\Http\Controllers\ViaggiController;

// Rotte per le API dei paesi
Route::get('/paesi', [PaesiController::class, 'index']);
Route::post('/paesi', [PaesiController::class, 'store']);
Route::get('/paesi/{id}', [PaesiController::class, 'show']);
Route::put('/paesi/{id}', [PaesiController::class, 'update']);
Route::delete('/paesi/{id}', [PaesiController::class, 'destroy']);

// Rotte per le API dei viaggi
Route::get('/viaggi', [ViaggiController::class, 'index']);
Route::post('/viaggi', [ViaggiController::class, 'store']);
Route::get('/viaggi/{id}', [ViaggiController::class, 'show']);
Route::put('/viaggi/{id}', [ViaggiController::class, 'update']);
Route::delete('/viaggi/{id}', [ViaggiController::class, 'destroy']);