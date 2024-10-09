<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController
{
    public function index()
    {
        $posts = DB::table('posts')->get();
        return view('blog', compact('posts'));

}
}
