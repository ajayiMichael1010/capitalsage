<?php

namespace App\Http\services\serviceImpl;

use App\Constants\YouVerify;
use App\Http\Responses\YouVerifyBVNVerificationResponse;
use App\Http\services\BVNService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class YouVerifyBVNServiceImpl implements BVNService
{
    public function verifyBVN(Request $request)
    {
        // YouVerify API key
        $apiKey = YouVerify::YOU_VERIFY_API_KEY;

        // YouVerify BVN verification endpoint
        $apiUrl = YouVerify::YOU_VERIFY_BVN_TEST_URL;

        // Headers for the API request
        $headers = [
            'token' => $apiKey
        ];

        //Test BVN
        $bvn = "11111111111";

        if(!empty($request->bvn)){
            $bvn = $request->bvn;
        }

        $requestBody = [
            "id" => $bvn,
            "isSubjectConsent" => true,
        ];
        $httpRequest = Http::withHeaders($headers)->post($apiUrl, $requestBody);
        if ($httpRequest->successful()) {
            $response = $httpRequest->json();

            //Return bvn owner details
            return YouVerifyBVNVerificationResponse::mapBVNOwnerDetail($response);

        } else {
            return YouVerifyBVNVerificationResponse::mapBVNErrorDetail($httpRequest->json());
        }
    }
}
