<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VentaController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('ventas', VentaController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\VentaController::class, 'index'])->name('home');
