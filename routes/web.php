<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});

route::resource('categorias', CategoriaController::class);
route::resource('productos', ProductoController::class);
