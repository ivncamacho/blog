<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController
{
    public function index()
    {
        $posts = Post::all();
        return view('blog', compact('posts'));

}
    public function show(Post $post){
        
    }
}
