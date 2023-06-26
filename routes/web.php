<?php

use App\Http\Controllers\calificacionesController;
use App\Http\Controllers\palabrasController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Route::get('/palabras', [palabrasController::class, 'indexPalabras'])->name('indexPalabras');

Route::post('/calificaciones', [calificacionesController::class, 'compararCalificaciones'])->name('compararCalificaciones');
Route::post('/procesarPalabras', [palabrasController::class, 'procesarPalabras'])->name('procesarPalabras');

