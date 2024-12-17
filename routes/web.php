<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\dashboardcontroller;

Route::get('/', [usercontroller::class, 'opening'])->name('opening');
Route::get('/register', [usercontroller::class, 'register'])->name('register');
Route::post('/registersubmit', [usercontroller::class, 'registerSubmit'])->name('register.submit');
Route::get('/login', [usercontroller::class, 'login'])->name('login');
Route::post('/loginsubmit', [usercontroller::class, 'loginSubmit'])->name('login.submit');
Route::get('/dashboard', [usercontroller::class, 'dashboard'])->middleware('auth')->name('dashboard');
Route::post('/logout', [usercontroller::class, 'logout'])->middleware('auth')->name('logout');
Route::get('/dashboard', [dashboardcontroller::class, 'showDashboard'])->middleware('auth');
Route::get('/search', [dashboardcontroller::class, 'search'])->middleware('auth');
