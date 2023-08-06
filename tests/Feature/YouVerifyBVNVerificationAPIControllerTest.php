<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class YouVerifyBVNVerificationAPIControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_verify_bvn_api_controller_returns_json_response()
    {
        $request = [
            "bvn" => "11111111112"
        ];

        $response = $this->post('/api/verify-bvn', $request);

        $response->assertStatus(200);

    }
}
