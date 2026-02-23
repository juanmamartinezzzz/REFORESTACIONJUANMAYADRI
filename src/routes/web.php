<?php

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

use App\Http\Controllers\UsuarioController;

// Agrupamos las rutas que requieren que el usuario esté logueado
Route::middleware(['auth'])->group(function () {
    Route::get('/perfil', [UsuarioController::class, 'perfil'])->name('perfil');
    Route::get('/perfil/editar', [UsuarioController::class, 'editar'])->name('perfil.editar');
    Route::put('/perfil/actualizar', [UsuarioController::class, 'actualizar'])->name('perfil.actualizar');
});
