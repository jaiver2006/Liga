<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GoalController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PresidentController;

// Cada ruta apunta al método pruebas() de su controlador
Route::get('/goal/create', [GoalController::class, 'create']);
Route::post('/goal/store', [GoalController::class, 'store'])->name('goals.store');


Route::get('/player/create', [PlayerController::class, 'create']);
Route::post('/player/store', [PlayerController::class, 'store'])->name('players.store');


Route::get('/team/create', [TeamController::class, 'create']);
Route::post('/team/store', [TeamController::class, 'store'])->name('teams.store');

Route::get('/president/create', [PresidentController::class, 'create']);
Route::post('/president/store', [PresidentController::class, 'store'])->name('presidents.store');

Route::get('/game/create',[GameController::class,'create']);
Route::post('/game/store',[GameController::class,'store'])->name('games.store');