<?php

use App\Http\Controllers\auth\UserAuthenticationController;
use App\Http\Controllers\auth\UserRegistrationController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {

Route::get("login", [UserAuthenticationController::class, "create"])->name("create");
Route::post("login", [UserAuthenticationController::class, "login"])->name("login");

Route::get("register", [UserRegistrationController::class, "create"])->name("create");
Route::post("register", [UserRegistrationController::class, "register"])->name("register");
});

Route::get("logout", [UserAuthenticationController::class, "logout"])->name("logout");

