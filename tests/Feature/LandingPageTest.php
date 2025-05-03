<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Tests\TestCase;

class LandingPageTest extends TestCase
{
    use RefreshDatabase;


    public function test_user_can_see_main_landing_page(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee(' Todo App');
    }

    public function test_user_can_see_login_page(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
        $response->assertSee('Login to Your Account');
    }

    public function test_user_can_see_register_page(): void
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
        $response->assertSee('Create an Account');
    }

    public function test_user_can_register(): void
    {
        $password = Str::random(8) . "@43A";
        $email = Str::random(10) . '@gmail.com';

        $response = $this->post('/register', [
            "name" => Str::random(5),
            "email" => $email,
            "password" => $password,
            "cpassword" => $password,
        ]);

        $response->assertRedirect();
        $response->assertSessionHas("success", "Account created!");
        $this->assertDatabaseHas('users', [
            "email" => $email,
        ]);
    }

    public function test_user_can_login(): void
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            "email" => $user->email,
            "password" => 'password',
        ]);

        $response->assertRedirect("/app/dashboard");
        $response->assertSessionHas("success", "Login successful!");
    }
}
