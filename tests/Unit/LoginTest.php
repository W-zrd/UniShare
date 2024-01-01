<?php

namespace Tests\Unit;

use Tests\TestCase; // Gunakan TestCase dari Laravel
use App\Models\User;
use App\Models\Admin;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request; // Import kelas Request yang benar

class LoginTest extends TestCase
{
    use RefreshDatabase;

    

    /** @test */
    public function admin_login_returns_correct_response()
    {
        $controller = new AuthController();

        // Membuat request palsu dengan kelas Request yang benar
        $request = Request::create('/login', 'POST', [
            'username' => 'admin',
            'password' => 'admin',
        ]);

        // Memanggil metode login
        $response = $controller->login($request);

        // Memeriksa apakah responsnya adalah redirect ke rute admin
        $this->assertEquals(302, $response->getStatusCode()); // Redirect status code
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

        // Memanggil metode login
        $response = $controller->login($request);

        // Memeriksa apakah responsnya adalah redirect ke dashboard atau halaman yang sesuai
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
    
        // Memeriksa apakah responsnya adalah redirect kembali ke halaman login dengan pesan error
        $this->assertEquals(302, $response->getStatusCode());
        $this->assertEquals(route('login'), $response->headers->get('Location'));
    }

    /** @test */
public function login_fails_with_empty_username_and_password()
{
    $controller = new AuthController();

    $request = Request::create('/login', 'POST', [
        'username' => '',
        'password' => '',
    ]);

    $response = $controller->login($request);

    // Memeriksa apakah responsnya adalah redirect kembali ke halaman login dengan pesan error
    $this->assertEquals(302, $response->getStatusCode());
    $this->assertEquals(route('login'), $response->headers->get('Location'));
}

/** @test */
public function login_fails_with_empty_password()
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
        'password' => '',
    ]);

    $response = $controller->login($request);

    // Memeriksa apakah responsnya adalah redirect kembali ke halaman login dengan pesan error
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

    // Memeriksa apakah responsnya adalah redirect kembali ke halaman login dengan pesan error
    $this->assertEquals(302, $response->getStatusCode());
    $this->assertEquals(route('login'), $response->headers->get('Location'));
}

/** @test */
public function login_fails_with_invalid_password()
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

    // Memeriksa apakah responsnya adalah redirect kembali ke halaman login dengan pesan error
    $this->assertEquals(302, $response->getStatusCode());
    $this->assertEquals(route('login'), $response->headers->get('Location'));
}

    

}
