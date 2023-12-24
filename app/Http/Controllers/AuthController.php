<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;

class AuthController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function showLoginForm(){

        return view('auth.login');
    }

    
    /**
     * Handle authentication of the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   


    public function showRegisterForm(){
        return response()->view('auth.register');
    }

    public function login(Request $request)
{
    $user = User::where('username', $request->username)->first();
    if ($user && password_verify($request->password, $user->password)) {
        Auth::login($user);
        $token = $user->createToken('auth_token')->plainTextToken;
        $data = [
            'signature' => $user->createToken('JWT_SECRET')->accessToken,
            'user' => $user,
            'token' => $token,
        ];
        return redirect()->route('dashboard')->with('success', 'Login successful. Welcome back, '. $user->name)->with('user', $user)->with('data', $data)->with('refresh', true);
    }
}
public function register(Request $request){

    if ($request->password != $request->password_confirmation) {
        // Jika Anda ingin mengembalikan tampilan
        if ($request->wantsJson()) {
            return response()->json([
                'message' => 'Password confirmation does not match'
            ], 401);
        } else {
            return view('tampilan_login_error');
        }
    }
    $encryptedPassword = bcrypt($request->password);
    $user = User::create([
        'nama_lengkap' => $request->name,
        'username' => $request->username,
        'password' => $encryptedPassword,
        'email' => $request->email,
        
    ]);

    if ($user) {
        $token = $user->createToken('auth_token')->plainTextToken;
        $data = [
            'signature' => $user->createToken('JWT_SECRET')->accessToken,
            'user' => $user,
            'token' => $token,
        ];
        session(['user_data' => $data]);
        // Jika Anda ingin mengembalikan tampilan
        if ($request->wantsJson()) {
            return response()->json([
                'message' => 'success',
                'data' => $data,
            ]);
        } else {
            return redirect()->route('dashboard')->with('success', 'Register successful. Welcome, ' . $user->name)->with('user', $user)->with('data', $data);
        }
    } else {
        // Jika Anda ingin mengembalikan tampilan
        if ($request->wantsJson()) {
            return response()->json([
                'message' => 'Invalid credentials'
            ], 401);
        } else {
            return view('tampilan_login_error');
        }
    }
}
}