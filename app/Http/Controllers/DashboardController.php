<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class DashboardController extends BaseController
{
    public function dashboard(): View
    {
        $pageTitle = "Dashboard";

        return view("dashboard.dashboard", compact("pageTitle"));
    }
}
