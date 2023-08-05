<?php

namespace App\Http\Controllers;

class DashboardController extends BaseController
{
    public function index(){
        $pageTitle = "Registration";

        return view("dashboard.index", compact("pageTitle"));
    }
}
