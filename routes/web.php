<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\JenisSuratController;

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard',
        [DashboardController::class,'index'])
        ->name('dashboard');

    Route::resource('surat', SuratController::class);

    Route::resource('jenis-surat',
        JenisSuratController::class);

    Route::get('/surat/{id}/print',
        [SuratController::class,'print'])
        ->name('surat.print');
});

require __DIR__.'/auth.php';