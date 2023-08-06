<?php

use App\Http\Controllers\bvn\BVNController;
use App\Http\Controllers\bvn\BVNVerificationAPIController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';

Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get("bvn/verification", [BVNController::class, 'createBvnVerificationForm'])->name('createBvnVerificationForm');
