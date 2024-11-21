<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;

Route::get('/', function () {
    return view('auth/login');
});

 
Route::view('/welcome', 'welcome');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/list-bookings', function () {
    return view('list-bookings');
});

Route::get('/list-units', [UnitController::class, 'index'])->name('units.index');

Route::get('/list-users', function () {
    return view('list-users');
});

Route::post('/properties', [UnitController::class, 'store'])->name('units.store');

Route::get('/input-units', function () {
    return view('input-units');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

