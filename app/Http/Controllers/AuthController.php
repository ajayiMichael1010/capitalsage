<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegistrationRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

class AuthController extends BaseController
{
    public function __construct()
    {
    }



//    public function create(): View
//    {
//        $pageTitle = "Registration";
//
//        return view("user.registration", compact(
//            "pageTitle"
//        ));
//    }



}
