<?php

namespace App\Http\Controllers\bvn;

use App\Constants\YouVerify;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BVNVerificationAPIController extends Controller
{
    public function verifyBvn(Request $request)
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

        $response = Http::withHeaders($headers)->post($apiUrl, $requestBody);
        if ($response->successful()) {
           return $response->json();
        } else {
           return $error = $response->json();
        }
    }
}
