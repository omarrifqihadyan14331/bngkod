<?php

use Illuminate\Support\Facades\Route;

Route::get('/erd', function () {
    return view('erd');
});

use App\Http\Controllers\PostController;

Route::get('/posts', [PostController::class, 'index']);
