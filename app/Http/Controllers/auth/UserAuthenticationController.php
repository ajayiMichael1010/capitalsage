<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\BaseController;
use App\Http\Requests\UserLoginRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAuthenticationController extends BaseController
{
    public function create() : view
    {
        $pageTitle = "Login In";

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
