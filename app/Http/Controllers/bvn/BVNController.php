<?php

namespace App\Http\Controllers\bvn;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\View\View;

class BVNController extends BaseController
{
    public function createBvnVerificationForm() : view
    {
        $pageTitle = "BVN Verification";
        return view("bvn.bvn-verification", compact("pageTitle"));
    }

}
