<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $data = Post::latest();
        if (request('search')) {
            $data->where('title', 'like', '%' . request('search') . '%');
        }


        foreach ($data as $event) {
            $event->formatted_date = $event->updated_at->format('d F Y');
        }
        return view('event', [
            "data" => $data->get()
        ]);
    }

    public function showCreateForm()
    {
        return view('admin.admin-create-event');
    }

    public function showCreateForms()
    {
        return view('admin.admin-event');
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

        Post::create($incomingFields);
    }


    public function viewPost(Post $id){
        $id->formatted_date = $id->updated_at->format('d F Y');
        return view('event-post', ["post" => $id]);
    }
}
