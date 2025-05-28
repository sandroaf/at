<?php
use App\Http\Controllers\ContatosController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->group(function () {
    Route::get('/contatos', [ContatosController::class, 'apiIndex']);
    Route::get('/contatos/{id}', [ContatosController::class, 'apiShow']);
});

   // Route::get('/contatos', [ContatosController::class, 'apiIndex']);
