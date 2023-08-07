<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\BaseController;
use App\Http\Requests\UserLoginRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class UserAuthenticationController extends BaseController
{
    /**
     * Display the login form.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function createLoginForm(): View
    {
        $pageTitle = "Log In";

        return view("auth.login", compact(
            "pageTitle"
        ));
    }

    /**
     * Handle user login attempt.
     *
     * @param UserLoginRequest $request // Using the UserLoginRequest for validation
     *
     * @return \Illuminate\Http\RedirectResponse
     */
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

    /**
     * Log the user out.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(): RedirectResponse
    {
        Auth::logout();

        return redirect('/login'); // Redirect to the login page
    }

}
