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

    public function updateDataUpper(Request $request, string $id){
        $updatedData = User::find($id);

        User::where('id',$updatedData->id)->update([
            'nama_lengkap' => $request['inNama'],
            'username' => $request['inUsername'],
            'alamat' => $request['inAlamat'],
        ]);
        return redirect('/editprof');
    }

    public function updateDataBelow(Request $request, string $id){
        $updatedData = User::find($id);

        User::where('id',$updatedData->id)->update([
            'username' => $request['inUsername'],
            'email' => $request['inEmail'],
            'password' => $request['inPassword'],
            'telepon' => $request['inNotelp'],
        ]);
        return redirect('/editprof');
    }
}
