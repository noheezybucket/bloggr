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

    public function unique_post($id)
    {
        $post = Post::find($id);
        return view("posts.unique", compact('post'));
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

    public function update($id)
    {
        $post = Post::find($id);
        return view('posts.update', compact("post"));
    }

    public function update_process(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $post = Post::find($id);

        $post->update($request->all());

        return redirect(route('update-post', ['id' => $id]))->with('status', 'Post updated successfully');
    }

    public function delete($id)
    {
        $post = Post::find($id);

        return view('posts/delete', compact('post'));
    }

    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        return redirect(route('all-posts'))->with('status', 'Post deleted successfully');
    }

    public function search(Request $request)
    {
        $search = $request['search'];
        $posts = Post::where('title', 'like', "%$search%")->get();


        return view('posts.search', compact('posts'));
    }
}
