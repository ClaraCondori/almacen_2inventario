<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/productos', App\Http\Controllers\ProductoController::class);
Route::resource('/categoria', App\Http\Controllers\CategoriumController::class);
Route::resource('/almacens', App\Http\Controllers\AlmacenController::class);
Route::resource('/users', App\Http\Controllers\UserController::class);
