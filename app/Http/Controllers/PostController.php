<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));

}
    public function show(Post $post){

        return view('posts.show', compact('post'));
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store()
    {
        return 'Post was created';
    }
}
