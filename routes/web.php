<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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
Route::post('/mahasiswa/store', [MahasiswaController::class, 'insert']);


Route::get('/mahasiswa',[MahasiswaController::class, 'Mahasiswa']);

Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit']);

Route::get('/tambah',[MahasiswaController::class, 'tambah']);

Route::get('/edit',[MahasiswaController::class, 'edit']);

Route::post('/mahasiswa/update/{id}', [MahasiswaController::class, 'update']);

Route::get('/mahasiswa/hapus/{id}', [MahasiswaController::class, 'delete']);
