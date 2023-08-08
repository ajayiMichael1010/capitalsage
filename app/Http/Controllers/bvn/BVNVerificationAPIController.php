<?php

namespace App\Http\Controllers\bvn;

use App\Http\Controllers\Controller;
use App\Http\Services\BVNService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Class BVNVerificationAPIController
 * Handles BVN verification requests and responses.
 *
 * @package App\Http\Controllers\bvn
 */
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
     * @param BVNService $BVNService The BVN verification service instance.
     */
    public function __construct(BVNService $BVNService)
    {
        $this->BVNService = $BVNService;
    }

    /**
     * Verify a BVN.
     *
     * @param Request $request The HTTP request containing BVN data.
     *
     * @return JsonResponse
     */
    public function verifyBvn(Request $request): JsonResponse
    {
        // Verify BVN using the BVNService
        $bvnOwnerDetail = $this->BVNService->verifyBVN($request);

        // Construct JSON response with the appropriate status code
        return response()->json($bvnOwnerDetail, $bvnOwnerDetail["statusCode"]); // statusCode = 200, 400, 403
    }
}
