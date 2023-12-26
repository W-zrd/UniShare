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
            'jenis_kelamin' => $request['inKelamin'],
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

    public function updateProfilePicture(Request $request, string $id){
        $updatedData = User::find($id);
        
        User::where('id',$updatedData->id)->update([
            
            'profile_img' => $request['profile_image'],
        ]);
        
        // dd($request->id);
        // $updatedData['profile_img'] = $request->profile_img;
        // if($request->hasFile('profile_image')){
        //     $destination = 'storage/profile_pictures'.$updatedData->profile_img;
        //     if(User::exist($destination)){
        //         User::delete($destination);
        //     }
        //     $file = $request->file('profile_image');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time().'.'.$extension;
        //     $file->move('storage/profile_pictures',$filename);
        //     $updatedData->profile_img = $filename;
        // }
        // $updatedData->update();
        return redirect('/editprof');
    }

}
