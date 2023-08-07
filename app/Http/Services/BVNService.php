<?php

namespace App\Http\Services;

use Illuminate\Http\Request;

/**
 * Interface BVNService
 * Defines the contract for BVN verification service.
 *
 * @package App\Http\Services
 */
interface BVNService
{
    /**
     * Verify a BVN.
     *
     * @param Request $request The HTTP request containing the BVN data.
     * @return mixed The result of BVN verification.
     */
    public function verifyBVN(Request $request): mixed;
}
