<?php
namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class ApplicationTest extends TestCase
{
    public function test_register_login_welcome_get_request(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        $response = $this->get('/vault/login');
        $response->assertStatus(200);

        $response = $this->get('/vault/register');
        $response->assertStatus(200);
    }
    
    public function test_auth_users_get_request(): void
    {
        $user = User::factory()->create();
 
        $response = $this->actingAs($user)
                         ->withSession(['banned' => false])
                         ->get('/vault/dashboard');
        $response->assertStatus(200);

        $response = $this->actingAs($user)
                         ->withSession(['banned' => false])
                         ->get('/vault/store');
        $response->assertStatus(200);

        $response = $this->actingAs($user)
                         ->withSession(['banned' => false])
                         ->get('/vault/password-generator');
        $response->assertStatus(200);
    }
}