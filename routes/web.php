<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;

Route::get('/horizontes', [LibrosController::class, 'index'])->name('libros.index');
Route::get('/libros/search', [LibrosController::class, 'search'])->name('libros.search');
// Mostrar detalles del libro seleccionado
Route::get('/libros/{libro}', [LibrosController::class, 'show'])->name('libros.show');
// Enviar solicitud para el libro seleccionado
Route::post('/libros/{libro}/solicitud', [LibrosController::class, 'solicitud'])->name('libros.solicitud');


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
});

require __DIR__.'/auth.php';
