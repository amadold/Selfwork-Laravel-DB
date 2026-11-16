<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function published(PostRequest $request)
    {
        Post::create([
            'title' => $request->title,
            'author' => $request->author,
            'content' => $request->content,
            'img' => $request->file('img') ? $request->file('img')->store('images', 'public') : '/media/mountain.jpg'
        ]);

        return redirect(route('confirmation'));
    }

    public function confirmation()
    {
        return view('posts.confirmation');
    }

    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
}
