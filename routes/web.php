<?php

use App\Http\Controllers\Admin\AlatController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\PeminjamController;
use App\Http\Controllers\Admin\PetugasController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Peminjam\AlatDipinjamController;
use App\Http\Controllers\Peminjam\PeminjamAlatController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return redirect()->route('login');
    });
    Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.store');
});

Route::prefix('admin')->name('admin.')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/peminjam', PeminjamController::class);
    Route::resource('/petugas', PetugasController::class);
    Route::resource('/kategori', KategoriController::class);
    Route::resource('/alat', AlatController::class);
   
});

Route::prefix('peminjam')->name('peminjam.')->middleware(['auth', 'role:peminjam'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/alat', PeminjamAlatController::class);
    Route::resource('/dipinjam', AlatDipinjamController::class);
    
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');