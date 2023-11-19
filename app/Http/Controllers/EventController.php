<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventPost;

class EventController extends Controller
{
    public function index(){
        $data = EventPost::all();
        foreach ($data as $event) {
            $event->formatted_date = $event->updated_at->format('d F Y');
        }
        return view('event', compact('data'));
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
        $incomingFields = $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['content'] = strip_tags($incomingFields['content']);

        EventPost::create($incomingFields);
    }

    public function viewPost(EventPost $id){
        $id->formatted_date = $id->updated_at->format('d F Y');
        return view('event-post', ["event" => $id]);
    }
}
