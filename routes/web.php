<?php

use App\Http\Controllers\AudienceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::controller(AudienceController::class)->group(function() {
    Route::get('/registrasi', 'registrasi')->name('registrasi.index');
    Route::post('/registrasi', 'store')->name('registrasi.store');
}); 


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/audience', [AudienceController::class, 'index'])->name('audience.index');
    Route::post('/audience/{id}', [AudienceController::class, 'updateStatus'])->name('updateStatus');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
