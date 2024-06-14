<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\PrestamoController;


Route::get('/horizontes', [LibrosController::class, 'index'])->name('libros.index');
Route::get('/libros/search', [LibrosController::class, 'search'])->name('libros.search');
Route::get('/libros/{libro}', [LibrosController::class, 'show'])->name('libros.show');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/prestamos', [PrestamoController::class, 'store'])->name('prestamos.store');
});

require __DIR__.'/auth.php';
