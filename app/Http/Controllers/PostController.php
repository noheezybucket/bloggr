<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(6);
        return view("posts.index", compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        Post::create($request->all());

        return redirect(route('create-post'))->with('status', 'Post created successfully');
    }

    public function update()
    {
        return view('posts.update');
    }

    public function update_process(Request $request, $id)
    {
    }

    public function destroy($id)
    {
        return view('posts.delete');
    }
}
