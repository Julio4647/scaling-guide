<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgenciaController;
use App\Http\Controllers\RegisterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [AgenciaController::class, 'index'])->name('agencias.index');


Route::get('/login', [AgenciaController::class, 'login'])->name('login');
Route::post('/login', [AgenciaController::class, 'loginAction']);

Route::post('/logout', [AgenciaController::class, 'logout'])->name('logout');


Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'create'])->name('register.create');

Route::get('/403',[AgenciaController::class, 'error403'])->name('403');

Route::middleware(['role:admin'])->group(function () {
    Route::get('/agencias/create', [AgenciaController::class, 'create'])->name('agencias.create');
    Route::post('/', [AgenciaController::class, 'store'])->name('agencias.store');
    Route::get('/agencias/{agencia}/edit', [AgenciaController::class, 'edit'])->name('agencias.edit');
    Route::put('/agencias/{agencia}', [AgenciaController::class, 'update'])->name('agencias.update');
    Route::delete('/agencias/{agencia}', [AgenciaController::class, 'destroy'])->name('agencias.destroy');
});

Route::middleware(['role:community'])->group(function () {
    Route::get('/agencias/create', [AgenciaController::class, 'create'])->name('agencias.create');
    Route::post('/', [AgenciaController::class, 'store'])->name('agencias.store');
    Route::get('/agencias/{agencia}/edit', [AgenciaController::class, 'edit'])->name('agencias.edit');
    Route::put('/agencias/{agencia}', [AgenciaController::class, 'update'])->name('agencias.update');
});
