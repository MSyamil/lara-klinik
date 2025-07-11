<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelurahanCotroller;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ParamedikController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\UnitKerjaController;


Route::get('/', function () {
    return view('welcome');
});
// Tampilan Default
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/kelurahan', [KelurahanCotroller::class, 'index'])->name('kelurahan');
Route::get('/pasien', [PasienController::class, 'index'])->name('pasien');
Route::get('/paramedik', [ParamedikController::class, 'index'])->name('paramedik');
Route::get('/periksa', [PeriksaController::class, 'index'])->name('periksa');
Route::get('/unitkerja', [UnitKerjaController::class, 'index'])->name('unitkerja');

// Tampilan tambah
Route::get('/kelurahan/tambah', [KelurahanCotroller::class, 'create'])->name('tambah.kelurahan');
Route::get('/tambah/pasien', [PasienController::class, 'create'])->name('tambah.pasien');
Route::get('/tambah/paramedik', [ParamedikController::class, 'create'])->name('tambah.paramedik');
Route::get('/tambah/periksa', [PeriksaController::class, 'create'])->name('tambah.periksa');
Route::get('/tambah/unitkerja', [UnitKerjaController::class, 'create'])->name('tambah.unitkerja');

// Tampilan edit
Route::get('/kelurahan/edit/{id}', [KelurahanCotroller::class, 'edit'])->name('edit.kelurahan');
Route::get('/paramedik/edit/{id}', [ParamedikController::class, 'edit'])->name('edit.paramedik');
Route::get('/pasien/edit/{id}', [PasienController::class, 'edit'])->name('edit.pasien');
Route::get('/periksa/edit/{id}', [PeriksaController::class, 'edit'])->name('edit.periksa');
Route::get('/unitkerja/edit/{id}', [UnitKerjaController::class, 'edit'])->name('edit.unitkerja');

// Store data
Route::post('/kelurahan/store', [KelurahanCotroller::class, 'store'])->name('kelurahan.store');
Route::post('/paramedik/store', [ParamedikController::class, 'store'])->name('paramedik.store');
Route::post('/pasien/store', [PasienController::class, 'store'])->name('pasien.store');
Route::post('/periksa/store', [PeriksaController::class, 'store'])->name('periksa.store');
Route::post('/unitkerja/store', [UnitKerjaController::class, 'store'])->name('unitkerja.store');

// update data
Route::put('/kelurahan/{id}', [KelurahanCotroller::class, 'update'])->name('kelurahan.update');
Route::put('/paramedik/{id}', [ParamedikController::class, 'update'])->name('paramedik.update');
Route::put('/pasien/{id}', [PasienController::class, 'update'])->name('pasien.update');
Route::put('/periksa/{id}', [PeriksaController::class, 'update'])->name('periksa.update');
Route::put('/unitkerja/{id}', [UnitKerjaController::class, 'update'])->name('unitkerja.update');

// delete data
Route::delete('/kelurahan/{id}', [KelurahanCotroller::class, 'destroy'])->name('kelurahan.destroy');
Route::delete('/paramedik/{id}', [ParamedikController::class, 'destroy'])->name('paramedik.destroy');
Route::delete('/pasien/{id}', [PasienController::class, 'destroy'])->name('pasien.destroy');
Route::delete('/periksa/{id}', [PeriksaController::class, 'destroy'])->name('periksa.destroy');
Route::delete('/unitkerja/{id}', [UnitKerjaController::class, 'destroy'])->name('unitkerja.destroy');