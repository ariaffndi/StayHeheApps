<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return view('auth/login');
})->middleware('guest');

Route::get('/dashboard', [DashboardController::class, 'showCountData'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    //route units
    Route::get('/list-units', [UnitController::class, 'index'])->name('units.index');

    Route::get('/units/create', [UnitController::class, 'create'])->name('units.create');
    Route::post('/units', [UnitController::class, 'store'])->name('units.store');

    Route::get('/units/{unit}/edit', [UnitController::class, 'edit'])->name('units.edit');
    Route::patch('/units/{unit}', [UnitController::class, 'update'])->name('units.update');

    Route::delete('/units/{unit}', [UnitController::class, 'destroy'])->name('units.destroy');

    
    //route members
    Route::get('/list-members', [MemberController::class, 'index'])->name('members.index');

    Route::get('/members/create', [MemberController::class, 'create'])->name('members.create');
    Route::post('/members', [MemberController::class, 'store'])->name('members.store');

    Route::get('/members/{member}/edit', [MemberController::class, 'edit'])->name('members.edit');
    Route::patch('/members/{member}', [MemberController::class, 'update'])->name('members.update');

    Route::delete('/members/{member}', [MemberController::class, 'destroy'])->name('members.destroy');


    //route bookings
    Route::get('/list-bookings', [BookingController::class, 'index'])->name('bookings.index');

    Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');
    Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
    Route::get('/bookings/{booking}/edit', [BookingController::class, 'edit'])->name('bookings.edit');
    Route::patch('/bookings/{booking}', [BookingController::class, 'update'])->name('bookings.update');

    Route::delete('/bookings/{booking}', [BookingController::class, 'destroy'])->name('bookings.destroy');

    Route::patch('/bookings/{booking}/complete', [BookingController::class, 'complete'])->name('bookings.complete');

});
// route profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';