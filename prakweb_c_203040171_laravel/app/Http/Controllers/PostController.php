<?php

namespace App\Http\Controllers;
use App\models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('posts', [
            "title" => "Blog",
            "posts" => Post::all(),
        ]);
    }

    public function show($slug){
        return view('post', [
            "title" => "Blog",
            "post" => Post::find($slug),
        ]);
    }
}