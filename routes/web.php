<?php
use Illuminate\Support\Facades\Route;

Route::resource('producto','App\Http\Controllers\ProductoController');
Route::resource('categoria','App\Http\Controllers\CategoriaController');

