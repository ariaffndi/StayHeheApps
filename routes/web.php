<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/admin/dashboard');
});

Route::get('/admin/dashboard', function () {
    return view('/admin/dashboard');
});


