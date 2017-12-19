<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function index(){
        $posts = Post::orderBy('created_at', 'desc')->limit(5)->get();
        return view('blog.index', compact('posts'));

    }

    public function getPost($slug){
        $post = Post::where('slug', '=', $slug)->first();
        return view('blog.article', compact('post'));
        
    }
}
