<?php

namespace App\Http\Controllers;

use App\Events\PostCreated;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function show()
    {
        $post = Post::all();
        return view('dashboard', ['posts' => $post]);
    }

    public function create(Request $request)
    {
        $post_data = $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);


        Post::create($request->only('title', 'content') + ['user_id' => auth()->id()]);
        $data = ['title' => $post_data['title'], 'content' => auth()->user()->name];
        event(new PostCreated($data));
        return redirect()->back()->with('status', 'Post Created Succesfully');
    }

    public function sendMail()
    {
        $name = 'neha';
        event(new PostCreated($name));
    }
}
