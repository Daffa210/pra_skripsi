<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PelangganController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::post('auth', [AuthController::class, 'authenticate'])->name('auth');
});

Route::middleware('auth')->group(function () {
    Route::get('layanan', [LayananController::class, 'index'])->name('layanan');
    Route::post('layanan', [LayananController::class, 'create'])->name('layanan.create');
    Route::get('pelanggan', [PelangganController::class, 'index'])->name('pelanggan');
    Route::post('pelanggan', [PelangganController::class, 'create'])->name('pelanggan.create');
    Route::post('confirm', [PelangganController::class, 'confirm'])->name('pelanggan.confirm');
    Route::get('auth', [AuthController::class, 'logout'])->name('auth.logout');
});
