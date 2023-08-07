<?php

namespace App\Http\Services\ServiceImpl;

use App\Constants\YouVerify;
use App\Http\Responses\YouVerifyBVNVerificationResponse;
use App\Http\Services\BVNService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

/**
 * Class YouVerifyBVNServiceImpl
 * Implements the BVNService interface for BVN verification using YouVerify API.
 *
 * @package App\Http\Services\ServiceImpl
 */
class YouVerifyBVNServiceImpl implements BVNService
{
    /**
     * Verify a BVN using the YouVerify API.
     *
     * @param Request $request The HTTP request containing the BVN data.
     * @return array The result of BVN verification.
     */
    public function verifyBVN(Request $request): array
    {
        // YouVerify API key
        $apiKey = YouVerify::YOU_VERIFY_API_KEY;

        // YouVerify BVN verification endpoint
        $apiUrl = YouVerify::YOU_VERIFY_BVN_TEST_URL;

        // Headers for the API request
        $headers = [
            'token' => $apiKey
        ];

        // Test BVN
        $bvn = "11111111111";

        if (!empty($request->bvn)) {
            $bvn = $request->bvn;
        }

        $requestBody = [
            "id" => $bvn,
            "isSubjectConsent" => true,
        ];
        $httpRequest = Http::withHeaders($headers)->post($apiUrl, $requestBody);
        if ($httpRequest->successful()) {
            $response = $httpRequest->json();

            // Return BVN owner details
            return YouVerifyBVNVerificationResponse::mapBVNOwnerDetail($response);

        } else {
            return YouVerifyBVNVerificationResponse::mapBVNErrorDetail($httpRequest->json());
        }
    }
}
