<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

/**
 * Class DashboardController
 * Handles dashboard-related functionality.
 *
 * @package App\Http\Controllers
 */
class DashboardController extends BaseController
{
    /**
     * Display the dashboard.
     *
     * @return View
     */
    public function dashboard(): View
    {
        $pageTitle = "Dashboard";

        return view("dashboard.dashboard", compact("pageTitle"));
    }
}
