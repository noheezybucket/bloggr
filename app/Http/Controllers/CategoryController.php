<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view("categories.index", compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
        ]);

        Category::create($request->all());

        return redirect(route('create-category'))->with('status', 'Category created successfully');
    }

    public function update()
    {
    }

    public function destroy()
    {
    }
}
