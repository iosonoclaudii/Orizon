<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaesiController;
use App\Http\Controllers\ViaggiController;

// Definisce le rotte per le API dei paesi
Route::get('/paesi', [PaesiController::class, 'index']); // Mostra tutti i paesi
Route::post('/paesi', [PaesiController::class, 'store']); // Aggiunge un nuovo paese
Route::get('/paesi/{id}', [PaesiController::class, 'show']); // Mostra dettagli di un singolo paese
Route::put('/paesi/{id}', [PaesiController::class, 'update']); // Modifica un paese esistente
Route::delete('/paesi/{id}', [PaesiController::class, 'destroy']); // Cancella un paese esistente

// Definisce le rotte per le API dei viaggi
Route::get('/viaggi', [ViaggiController::class, 'index']); // Mostra tutti i viaggi
Route::post('/viaggi', [ViaggiController::class, 'store']); // Aggiunge un nuovo viaggio
Route::get('/viaggi/{id}', [ViaggiController::class, 'show']); // Mostra dettagli di un singolo viaggio
Route::put('/viaggi/{id}', [ViaggiController::class, 'update']); // Modifica un viaggio esistente
Route::delete('/viaggi/{id}', [ViaggiController::class, 'destroy']); // Cancella un viaggio esistente
