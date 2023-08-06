<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserAuthenticationControllerTest extends TestCase
{
    use RefreshDatabase; // Reset the database after each test

    public function test_login_page_is_accessible()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_user_can_login_with_valid_credentials()
    {
        $user = $this->getUser();

        $response = $this->post('/login', [
            'email' => 'test@example.com',
            'password' => 'password',
        ]);

        $response->assertRedirect('/dashboard');
        $this->assertAuthenticatedAs($user);
    }


    public function test_authenticated_user_can_logout()
    {
        $user = $this->getUser();
        $this->actingAs($user);

        $response = $this->post('/logout');

        $response->assertRedirect('/login');
        $this->assertGuest();
    }

    private function getUser()
    {
        return User::factory()->create([
            'name' => 'Ajayi Michael',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
            'role' => 'ROLE_USER'
        ]);
    }
}
