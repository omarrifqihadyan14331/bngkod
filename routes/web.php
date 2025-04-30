<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\ObatController;

Route::get('/', function () {
<<<<<<< HEAD
    return view('/auth/login');
});

Route::prefix('dokter')->middleware('role:dokter')->group(function () {
    Route::get('/', [HomeController::class, 'dokter'])->name('dokter.home');
=======
    return view('welcome');
});



Route::prefix('dokter')->group (function(){
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
    Route::resource('obat', ObatController::class);
    Route::resource('periksa', PeriksaController::class);
});

<<<<<<< HEAD

Route::prefix('pasien')->middleware('role:pasien')->group(function () {
    Route::get('/', [PeriksaController::class, 'index'])->name('pasien.home');
    Route::get('/periksa', [PeriksaController::class, 'pasienindex'])->name('periksa.pasienindex');
    Route::get('/pasien/periksa', [PeriksaController::class, 'pasienindex'])->name('periksa.pasienindex');
    Route::get('/periksa/create', [PeriksaController::class, 'pasiencreate'])->name('pasien.periksa.create');
    Route::post('/periksa/store', [PeriksaController::class, 'pasienstore'])->name('pasien.periksa.store');
    Route::get('/riwayat', [PeriksaController::class, 'riwayatIndex'])->name('pasien.riwayat.index');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
=======
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dokter', [HomeController::class, 'dokter'])-> name('dokter');
=======

Route::get('/erd', function () {
    return view('erd');
});

use App\Http\Controllers\PostController;

Route::get('/posts', [PostController::class, 'index']);
>>>>>>> e3104d0cc82be6935792b089fb27d42c43e8b9b3
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
