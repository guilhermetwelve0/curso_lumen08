<?php

namespace App\Http\Controllers;

use App\Models\Models\Post;
use Illuminate\Http\Request;

class Home extends Controller
{
    //

    public function index()
    {
        $posts = Post::with('user')->get();
        return view('site.home', ['title' => 'Home', 'posts' => $posts]);
    }
}
