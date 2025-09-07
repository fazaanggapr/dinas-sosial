<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\KontakController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// halaman umum
Route::view('/', 'auth.register');
Route::view('/profil', 'profil');
Route::view('/layanan', 'layanan');
Route::view('/dokumentasi', 'dokumentasi');
Route::view('/pengaduan', 'pengaduan');
Route::view('/kontak', 'kontak');

// fallback dashboard (default Breeze)
Route::get('/dashboard', function () {
    return redirect()->route('redirect');
})->middleware('auth')->name('dashboard');

// redirect setelah login
Route::get('/redirect', function () {
    $user = Auth::user();
    if ($user && $user->role === 'admin') {
        return redirect()->route('admin.dashboard');
    }
    return redirect()->route('user.home');
})->middleware('auth')->name('redirect');

// 🔹 Admin area
Route::middleware(['auth', \App\Http\Middleware\CheckRole::class . ':admin'])->group(function () {
    Route::get('/admin/dashboard', fn() => view('dashboard'))->name('admin.dashboard');
    Route::get('/pengaduanadmin', [PengaduanController::class, 'index'])->name('pengaduan.index');
    Route::get('/kontakadmin', [KontakController::class, 'index'])->name('kontak.admin');
});

// 🔹 User area
Route::middleware(['auth', \App\Http\Middleware\CheckRole::class . ':user'])->group(function () {
    Route::get('/home', fn() => view('home'))->name('user.home');
    Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');
    Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');
});

// Route baru untuk delete
// Route untuk hapus kontak (opsional)
Route::delete('/kontakadmin/{id}', [KontakController::class, 'destroy'])->name('kontak.destroy');
Route::delete('/pengaduan/{id}', [PengaduanController::class, 'destroy'])->name('pengaduan.destroy');

// Profile area (bawaan Breeze)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
