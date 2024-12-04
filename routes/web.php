<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::prefix('users')->middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('users.dashboard');
});



Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
});


