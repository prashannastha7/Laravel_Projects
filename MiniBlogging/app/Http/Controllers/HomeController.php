<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show_post(){
        $posts = Post::paginate(2); //paginate is used to show the number of post per page
        return view('welcome', ['posts' => $posts]);
    }
}
