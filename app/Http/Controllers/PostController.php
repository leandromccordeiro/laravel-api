<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::all();
        return $post;
    }

    public function store(Request $request)
    {
        $post = Post::create($request->all());
        return $post;
    }

    public function show (Post $post)
    {
        return response()->json([
            'data' => $post,
        ]);
    }

    public function update (Post $post, Request $request)
    {
        $post->update($request->all());
        return $post;
    }

    public function destroy (Post $post)
    {
        $post->delete();
        return $post;
    }
}
