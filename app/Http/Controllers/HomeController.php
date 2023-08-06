<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function index() : view
    {
        $pageTitle = "Home";
        return view("home", compact('pageTitle'));
    }
}
