<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(6);
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

    public function update($id)
    {
        $category = Category::find($id);
        return view('categories.update', compact("category"));
    }

    public function update_process(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required',
        ]);

        $category = Category::find($id);

        $category->update($request->all());

        return redirect(route('update-category', ['id' => $id]))->with('status', 'Category updated successfully');
    }

    public function delete($id)
    {
        $category = Category::find($id);

        return view('categories/delete', compact('category'));
    }

    public function destroy($id)
    {
        $Category = Category::find($id);

        $Category->delete();

        return redirect(route('all-categories'))->with('status', 'Category deleted successfully');
    }


    public function search(Request $request)
    {
        $search = $request['search'];
        $categories = Category::where('category_name', 'like', "%$search%")->get();


        return view('categories.search', compact('categories'));
    }
}
