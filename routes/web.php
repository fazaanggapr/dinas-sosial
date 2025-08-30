<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/layanan', function () {
    return view('layanan');
});
Route::get('/dokumentasi', function () {
    return view('dokumentasi');
});
Route::get('/pengaduan', function () {
    return view('pengaduan');
});
Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
