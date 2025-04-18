<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\ObatController;

Route::get('/', function () {
    return view('welcome');
});



Route::prefix('dokter')->group (function(){
    Route::resource('obat', ObatController::class);
    Route::resource('periksa', PeriksaController::class);
});

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
