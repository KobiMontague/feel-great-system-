<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PartnershipController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::view('/science', 'science')->name('science');
Route::get('/partnership', [PartnershipController::class, 'index'])->name('partnership');
Route::post('/partnership', [PartnershipController::class, 'store'])->name('partnership.store');

