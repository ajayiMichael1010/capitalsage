<?php

namespace App\Http\Controllers\bvn;

use App\Http\Controllers\Controller;
use App\Http\Services\BVNService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BVNVerificationAPIController extends Controller
{
    /**
     * BVNService instance.
     *
     * @var BVNService
     */
    private BVNService $BVNService;

    /**
     * BVNVerificationAPIController constructor.
     *
     * @param BVNService $BVNService
     */
    public function __construct(BVNService $BVNService)
    {
        $this->BVNService = $BVNService;
    }

    /**
     * Verify a BVN.
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function verifyBvn(Request $request): JsonResponse
    {
        $bvnOwnerDetail = $this->BVNService->verifyBVN($request);
        return response()->json($bvnOwnerDetail, 200);
    }
}
