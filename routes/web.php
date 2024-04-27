<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});
use Illuminate\Support\Facades\Route;
Route::get('/bares', function () {
    return view('bares'); // Esto devuelve la vista de bares.blade.php
})->name('bares');
Route::get('/restaurantes', function () {
    return view('restaurantes'); // Esto devuelve la vista de restaurantes.blade.php
})->name('restaurantes');
Route::get('/hoteles', function () {
    return view('hoteles'); // Esto devuelve la vista de restaurantes.blade.php
})->name('hoteles');

use App\Http\Controllers\UserController;

Route::get('/hoteles', [HotelController::class, 'index'])->name('hoteles');


Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);

Route::get('/categories/{category}', function ($category) {
    return "Mostrando la categoría: $category";
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/hoteles', function () {
    return view('hoteles');
})->name('hoteles');

Route::get('/restaurantes', function () {
    return view('restaurantes');
})->name('restaurantes');

Route::get('/bares', function () {
    return view('bares');
})->name('bares');