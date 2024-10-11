<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
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

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5|max:20',
            'body' => 'required',
        ], [
            'title.required' => 'El titulo es obligatorio',
            'body.required' => 'El contenido es obligatorio',
        ]);
        $post = new Post();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        session()->flash('status', 'Post created successfully');

        return to_route('posts.index');
    }
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));

    }
}
