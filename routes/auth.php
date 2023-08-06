<?php

use App\Http\Controllers\auth\UserAuthenticationController;
use App\Http\Controllers\auth\UserRegistrationController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {

Route::get("login", [UserAuthenticationController::class, "createLoginForm"])->name("create");
Route::post("login", [UserAuthenticationController::class, "login"])->name("login");

Route::get("register", [UserRegistrationController::class, "createRegistrationForm"])->name("create");
Route::post("register", [UserRegistrationController::class, "register"])->name("register");
});

Route::post("logout", [UserAuthenticationController::class, "logout"])->name("logout");

