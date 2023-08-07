<?php

namespace App\Http\Controllers;

/**
 * Class BaseController
 * Provides base controller functionality for other controllers.
 *
 * @package App\Http\Controllers
 */
class BaseController extends Controller
{
    /**
     * BaseController constructor.
     * Apply authentication middleware to all methods except specified ones.
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['login', 'register', 'createLoginForm', 'createRegistrationForm']]);
    }
}
