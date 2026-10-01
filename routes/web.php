<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {


    Route::get('/mahasiswa', [MahasiswaController::class, 'Mahasiswa']);



    Route::middleware('role:admin')->group(function () {

        // Halaman tambah mahasiswa
        Route::get('/tambah', [MahasiswaController::class, 'tambah']);

        // Proses simpan mahasiswa
        Route::post('/mahasiswa/store', [MahasiswaController::class, 'insert']);

        // Halaman edit mahasiswa
        Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit']);

        // Proses update mahasiswa
        Route::post('/mahasiswa/update/{id}', [MahasiswaController::class, 'update']);

        // Hapus mahasiswa
        Route::get('/mahasiswa/hapus/{id}', [MahasiswaController::class, 'delete']);
    });



    Route::middleware('role:admin')->group(function () {

        Route::get('/profile', [ProfileController::class, 'edit'])
            ->name('profile.edit');

        Route::patch('/profile', [ProfileController::class, 'update'])
            ->name('profile.update');

        Route::delete('/profile', [ProfileController::class, 'destroy'])
            ->name('profile.destroy');
    });
});


require __DIR__.'/auth.php';