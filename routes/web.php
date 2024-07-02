<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; // Asegúrate de importar el controlador

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductController::class); // Define la ruta de recursos

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
