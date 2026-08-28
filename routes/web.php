<?php

use App\Http\Controllers\GudangController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('login');
});

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('role:administrator,operator')->group(function () {
  Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
});

Route::middleware('role:administrator')->group(function () {
  Route::get('/gudang', [GudangController::class, 'index'])->name('gudang.index');
});

require __DIR__ . '/auth.php';
