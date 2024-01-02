<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    

    /** @test */
    public function admin_login_returns_correct_response()
    {
        $controller = new AuthController();

        $request = Request::create('/login', 'POST', [
            'username' => 'admin',
            'password' => 'admin',
        ]);


        $response = $controller->login($request);

        $this->assertEquals(302, $response->getStatusCode());
        $this->assertEquals(route('admin'), $response->headers->get('Location'));
    }

    /** @test */
    public function user_can_login_with_correct_credentials()
    {
        $user = User::create([
            'nama_lengkap' => 'Rafidhia Haikal P',
            'username' => 'testuser',
            'email' => 'Wzrd@unishare.com',
            'password' => bcrypt('password123'),
        ]);

        $controller = new AuthController();

        $request = Request::create('/login', 'POST', [
            'username' => 'testuser',
            'password' => 'password123',
        ]);

        $response = $controller->login($request);

        $this->assertEquals(302, $response->getStatusCode());
        $this->assertEquals(route('dashboard'), $response->headers->get('Location'));
    }

    /** @test */
    public function login_fails_with_incorrect_credentials()
    {
        $controller = new AuthController();

        User::create([
            'nama_lengkap' => "Rafidhia Haikal P",
            'username' => 'testuser',
            'password' => bcrypt('correctpassword'),
            'email' => "Wzrd@unishare.com"
        ]);

        $request = Request::create('/login', 'POST', [
            'username' => 'testuser',
            'password' => 'wrongpassword',
        ]);

        $response = $controller->login($request);

        $this->assertEquals(302, $response->getStatusCode());
        $this->assertEquals(route('login'), $response->headers->get('Location'));
    }


/** @test */
public function login_fails_with_invalid_username()
{
    $controller = new AuthController();

    $request = Request::create('/login', 'POST', [
        'username' => 'invaliduser',
        'password' => 'somepassword',
    ]);

    $response = $controller->login($request);

    $this->assertEquals(302, $response->getStatusCode());
    $this->assertEquals(route('login'), $response->headers->get('Location'));
}



    

}
