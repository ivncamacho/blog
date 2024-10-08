<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController
{
    public function index()
    {
        $posts = DB::table('posts')->get();

        dd($posts->first);

        return view('blog', compact('posts'));

}
}
