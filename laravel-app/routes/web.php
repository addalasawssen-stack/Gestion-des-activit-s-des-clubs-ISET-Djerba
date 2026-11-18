<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AccountController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/connexion', [AuthController::class, 'loginForm'])->name('login');
    Route::post('/connexion', [AuthController::class, 'login'])->name('login.store');
    Route::view('/inscription', 'auth.register')->name('register');
    Route::post('/inscription', [AuthController::class, 'register'])->name('register.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard', ['users' => User::count()]);
    })->name('dashboard');
    Route::post('/deconnexion', [AuthController::class, 'logout'])->name('logout');
    Route::post('/comptes-responsables', [AccountController::class, 'store'])->name('accounts.store');
});
