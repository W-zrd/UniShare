<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KarirPost;

class KarirPostController extends Controller
{
    public function index(){
        return view('karir', [
            "data" => KarirPost::latest()->filter(request(['search']))->get()
        ]);
    }

    public function showCreateForm()
    {
        return view('admin.admin-create-karir');
    }

    public function showCreateForms()
    {
        return view('admin.admin-karir');
    }

    public function storeNewPost(Request $request)
    {
        $adminId = 1;
        $incomingFields = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'kategori' => 'required',
            'tema' => 'required',
            'content' => 'required',
            'url_event' => 'required',
            'guidebook' => 'file', // Add file validation rule
            'banner_img' => 'image|file|max:5120', // Max uploaded img = 5MB
        ]);

        // Handle file uploads
        if ($request->hasFile('guidebook')) {
            $incomingFields['guidebook'] = $request->file('guidebook')->store('guidebooks');
        }

        if ($request->hasFile('banner_img')) {
            $incomingFields['banner_img'] = $request->file('banner_img')->store('banners');
        }
        $incomingFields['admin_id'] = $adminId;

        KarirPost::create($incomingFields);
    }


    public function viewPost(){
        $post = KarirPost::find($id);
        $post->formatted_date = $post->updated_at->format('d F Y');
        return view('karir', ["data" => $post]);
    }
    
}
