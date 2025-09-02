<?php

use App\Http\Controllers\LeadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PartnershipController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'index']);
Route::view('/science', 'science')->name('science');
Route::get('/partnership', [PartnershipController::class, 'index'])->name('partnership');
Route::post('/partnership', [PartnershipController::class, 'store'])->name('partnership.store');

// Auth (manual)
Route::middleware('guest')->group(function () {

    // Add throttle to login to prevent abuse
    Route::get('/feel-au', [AuthController::class, 'showLogin'])->name('login.show');
    Route::post('/login', [AuthController::class, 'login'])->middleware('throttle:10,1')->name('login');
});

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

// routes/web.php
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/leads', [LeadController::class, 'index'])->name('leads.index');
    Route::get('/leads/create', [LeadController::class, 'create'])->name('leads.create');
    Route::post('/leads', [LeadController::class, 'store'])->name('leads.store');
    Route::get('/leads/{lead}', [LeadController::class, 'show'])->name('leads.show');
    Route::put('/leads/{lead}', [LeadController::class, 'update'])->name('leads.update');
    Route::delete('/leads/{lead}', [LeadController::class, 'destroy'])->name('leads.destroy');
});


