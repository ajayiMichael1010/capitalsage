<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class UserAuthenticationController extends BaseController
{
    public function createLoginForm() : view
    {
        $pageTitle = "Log In";

        return view("auth.login", compact(
            "pageTitle"
        ));
    }

    public function login(UserLoginRequest $request): RedirectResponse
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect('/dashboard');
        } else {
            // Authentication failed
            return back()->with('error', 'Invalid credentials');
        }
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();

        return redirect('/login'); // Redirect to the login page
    }

}
