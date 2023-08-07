<?php

use App\Http\Controllers\bvn\BVNWebInterfaceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get("bvn/verification", [BVNWebInterfaceController::class, 'createBvnVerificationForm'])->name('createBvnVerificationForm');

require __DIR__.'/auth.php'; //CUSTOM auth.php
