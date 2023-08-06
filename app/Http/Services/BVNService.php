<?php

namespace App\Http\Services;

use Illuminate\Http\Request;

interface BVNService
{
    public function verifyBVN(Request $request);
}
