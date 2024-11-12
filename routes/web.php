<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [PedidoController::class, 'index'])->name('dashboard');
Route::delete('/pedidos/{id}', [PedidoController::class, 'destroy'])->name('pedidos.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/pedidos/create', [PedidoController::class, 'create'])->middleware('auth')->name('pedidos.create');
    Route::post('/pedidos', [PedidoController::class, 'store'])->middleware('auth')->name('pedidos.store');
});

require __DIR__.'/auth.php';
