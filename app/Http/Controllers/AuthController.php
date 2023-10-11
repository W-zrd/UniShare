<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(Request $request)
{
    $user = User::where('username', $request->username)->where('password', $request->password)->first();
    if ($user) {
        $token = $user->createToken('auth_token')->plainTextToken;
        $data = [
            'signature' => $user->createToken('JWT_SECRET')->accessToken,
            'user' => $user,
            'token' => $token,
        ];

        // Jika Anda ingin mengembalikan tampilan
        if ($request->wantsJson()) {
            return response()->json([
                'message' => 'success',
                'data' => $data,
            ]);
        } else {
            if ($user) {
                $token = $user->createToken('auth_token')->plainTextToken;
                $data = [
                    'signature' => $user->createToken('JWT_SECRET')->accessToken,
                    'user' => $user,
                    'token' => $token,
                ];

                // Jika Anda ingin mengembalikan tampilan
                if ($request->wantsJson()) {
                    return response()->json([
                        'message' => 'success',
                        'data' => $data,
                    ]);
                } else {

                    return redirect()->route('dashboard')->with('success', 'Login successful. Welcome back, ' . $user->name)->with('user', $user)->with('data', $data);
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
}



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
