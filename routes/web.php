<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GoalController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PresidentController;
use App\Http\Controllers\GameTeamController;

// Cada ruta apunta al método pruebas() de su controlador
Route::get('/goal/pruebas', [GoalController::class, 'pruebas']);
Route::get('/player/pruebas', [PlayerController::class, 'pruebas']);
Route::get('/team/pruebas', [TeamController::class, 'pruebas']);
Route::get('/game/pruebas', [GameController::class, 'pruebas']);
Route::get('/president/pruebas', [PresidentController::class, 'pruebas']);
Route::get('/gameteam/pruebas', [GameTeamController::class, 'pruebas']);
