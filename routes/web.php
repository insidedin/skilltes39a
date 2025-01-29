<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PelangganController;


Route::get('/', function () {
    return view('home');
})->name('home');

// Route otentikasi admin
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

// Route untuk dashboard
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

// Route Group untuk Admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'admin'])->name('admin');
    Route::get('/create', [AdminController::class, 'create'])->name('create');
    Route::post('/', [AdminController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [AdminController::class, 'edit'])->name('edit');
    Route::put('/{id}', [AdminController::class, 'update'])->name('update');
    Route::delete('/{id}', [AdminController::class, 'destroy'])->name('destroy');
});

// Route Group untuk Suplier
Route::prefix('suplier')->name('suplier.')->group(function () {
    Route::get('/', [SuplierController::class, 'suplier'])->name('suplier');
    Route::get('/create', [SuplierController::class, 'create'])->name('create');
    Route::post('/', [SuplierController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [SuplierController::class, 'edit'])->name('edit');
    Route::put('/{id}', [SuplierController::class, 'update'])->name('update');
    Route::delete('/{id}', [SuplierController::class, 'destroy'])->name('destroy');
});

// Route Group untuk Pelanggan
Route::prefix('pelanggan')->name('pelanggan.')->group(function () {
    Route::get('/', [PelangganController::class, 'pelanggan'])->name('pelanggan');
    Route::get('/create', [PelangganController::class, 'create'])->name('create');
    Route::post('/', [PelangganController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [PelangganController::class, 'edit'])->name('edit');
    Route::put('/{id}', [PelangganController::class, 'update'])->name('update');
    Route::delete('/{id}', [PelangganController::class, 'destroy'])->name('destroy');
});

// Route Group untuk Barang
Route::prefix('barang')->name('barang.')->group(function () {
    Route::get('/', [BarangController::class, 'barang'])->name('barang');
    Route::get('/create', [BarangController::class, 'create'])->name('create');
    Route::post('/', [BarangController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [BarangController::class, 'edit'])->name('edit');
    Route::put('/{id}', [BarangController::class, 'update'])->name('update');
    Route::delete('/{id}', [BarangController::class, 'destroy'])->name('destroy');
});