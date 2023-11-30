<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('admin.admin', compact('data'));
    }

    public function showdata($id){
        $data = User::find($id);
        return view('edit-user', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = User::find($id);
        $data -> update($request -> all());
        return redirect()->route('admin');
    }

    public function delete($id){
        $data = User::find($id);
        $data -> delete();
        return redirect()->route('admin');
    }
}
