<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    public function showData(){
        $users = User::all();
        return view('editprof', compact('users'));
    }

}
