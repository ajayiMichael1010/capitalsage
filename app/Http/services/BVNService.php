<?php

namespace App\Http\services;

use Illuminate\Http\Request;

interface BVNService
{
    public function verifyBVN(Request $request);
}
