<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserRegistrationControllerTest extends TestCase
{
    use RefreshDatabase; // Reset the database after each test

    public function test_registration_page_is_accessible()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_user_can_register()
    {
        $response = $this->post('/register', [
            'fullName' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'Password2$',
            'password_confirmation' => 'Password2$',
            'role' => 'ROLE_USER',
        ]);

        $response->assertSessionHas('success');
        $this->assertDatabaseHas('users', [
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }

}
