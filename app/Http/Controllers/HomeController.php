<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

/**
 * Class HomeController
 * Handles home page functionality.
 *
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Display the home page.
     *
     * @return View
     */
    public function index(): View
    {
        $pageTitle = "Home";
        return view("home", compact('pageTitle'));
    }
}
