<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnpundungController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AnnpundungController::class, 'login'])->name('annpundung.login');
Route::get('/register', [AnnpundungController::class, 'register'])->name('annpundung.register');
Route::get('/dashboard', [AnnpundungController::class, 'dashboard'])->name('annpundung.dashboard');
Route::get('/pencegahan', [AnnpundungController::class, 'pencegahan'])->name('annpundung.pencegahan');
