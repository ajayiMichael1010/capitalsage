<?php

namespace App\Http\Controllers\bvn;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\View\View;

class BVNController extends BaseController
{
    /**
     * Display the BVN verification form.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function createBvnVerificationForm(): View
    {
        $pageTitle = "BVN Verification";
        return view("bvn.bvn-verification", compact("pageTitle"));
    }
}
