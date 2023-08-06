<?php

namespace App\Http\Controllers\bvn;

use App\Constants\YouVerify;
use App\Http\Controllers\Controller;
use App\Http\Responses\YouVerifyBVNVerificationResponse;
use App\Http\services\BVNService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class YouVerifyBVNVerificationAPIController extends Controller
{
    private BVNService $BVNService;
    /**
     * @param BVNService $BVNService
     */
    public function __construct(BVNService $BVNService)
    {
        $this->BVNService = $BVNService;
    }

    public function verifyBvn(Request $request): JsonResponse
    {
      $bvnOwnerDetail = $this->BVNService->verifyBVN($request);
      return response()->json($bvnOwnerDetail, 200);
    }
}
