<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('home');
})->name('home');

// Route otentikasi admin
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

// Route untuk CRUD Admin
Route::get('/admin', [AdminController::class, 'admin'])->name('admin.admin');
Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');
Route::get('/admin/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('/admin/{id}', [AdminController::class, 'update'])->name('admin.update');
Route::delete('/admin/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');

// Route untuk CRUD Suplier
Route::get('/suplier', [SuplierController::class, 'suplier'])->name('suplier.suplier');
Route::get('/suplier/create', [SuplierController::class, 'create'])->name('suplier.create');
Route::post('/suplier', [SuplierController::class, 'store'])->name('suplier.store');
Route::get('/suplier/{id}/edit', [SuplierController::class, 'edit'])->name('suplier.edit');
Route::put('/suplier/{id}', [SuplierController::class, 'update'])->name('suplier.update');
Route::delete('/suplier/{id}', [SuplierController::class, 'destroy'])->name('suplier.destroy');