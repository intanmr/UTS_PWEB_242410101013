<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'login'])->name('login');

Route::post('/login-process', [PageController::class, 'loginProcess'])->name('login.process');

Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

Route::get('/profile', [PageController::class, 'profile'])->name('profile');

Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');

Route::get('/logout', [PageController::class, 'logout'])->name('logout');
