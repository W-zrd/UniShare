<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KarirPost;
use App\Models\Post;

class DashboardController extends Controller
{
    public function showData(){
        $dataKarirPost = KarirPost::all();
        $dataPost = Post::all();

        return view('dashboard', [
            'dataKarirPost' => $dataKarirPost,
            'dataPost' => $dataPost,
        ]);
    }
}
