<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MemberController;

Route::get('/', function () {
    return view('auth/login');
})->middleware('guest');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    //route units
    Route::get('/list-units', [UnitController::class, 'index'])->name('units.index');

    Route::get('/units/create', [UnitController::class, 'create'])->name('units.create');
    Route::post('/units', [UnitController::class, 'store'])->name('units.store');

    Route::get('/units/{unit}/edit', [UnitController::class, 'edit'])->name('units.edit');
    Route::patch('/units/{unit}', [UnitController::class, 'update'])->name('units.update');


    Route::delete('/units/{unit}', [UnitController::class, 'destroy'])->name('units.destroy');

    //route members
    route::get('/list-members', [MemberController::class, 'index'])->name('member.index');
});
// route profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';