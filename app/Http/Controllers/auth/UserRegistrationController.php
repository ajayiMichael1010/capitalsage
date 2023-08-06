<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\BaseController;
use App\Http\Requests\UserRegistrationRequest;
use App\Http\UserRole;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;

/**
 * Class UserRegistrationController
 * @package App\Http\Controllers\Auth
 */
class UserRegistrationController extends BaseController
{
    /**
     * Display the registration form.
     *
     * @return View
     */
    public function createRegistrationForm(): View
    {
        $pageTitle = "Registration";

        return view("auth.registration", compact("pageTitle"));
    }

    /**
     * Handle user registration.
     *
     * @param UserRegistrationRequest $request
     * @return RedirectResponse
     */
    public function register(UserRegistrationRequest $request): RedirectResponse
    {
        try {
            $user = new User();
            $user->name = $request->fullName;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            if (empty($request->role)) {
                $user->role = UserRole::ROLE_USER;
            }
            else{
                $user->role = $request->role;
            }
            $user->save();
        } catch (QueryException $e) {
            if ($e->getCode() === '23000') {
                return back()->with('error', 'Registration failed! Email already exists');
            } else {
                return back()->with('error', 'Registration failed! An error has occurred');
            }
        }
        return back()->with('success', 'Registration successful! You can now log in.');
    }
}
