<?php

use Illuminate\Support\Facades\Route;
use App\Models\Libro;

Route::get('/', function () {
    $libros = Libro::all();
    return view('welcome', compact('libros'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
