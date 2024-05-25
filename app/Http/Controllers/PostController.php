<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        Post::create([
            "title" => $request->title,
            "category_id" => $request->category_id,
            "content" => $request->content,

        ]);

        return redirect(route('create-post'))->with('status', 'Post created successfully');
    }

    public function update($id)
    {
        $post = Post::find($id);
        $categories = Category::all();

        return view('posts.update', compact("post", "categories"));
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
