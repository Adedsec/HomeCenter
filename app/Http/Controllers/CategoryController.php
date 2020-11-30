<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        //dd($categories->toArray());
        return view('Category.index', compact('categories'));
    }

    public function store(Request $request)
    {
        //dd($request->toArray());
        $category = Category::create($request->except('_token'));
        return redirect('/categories');
    }

    public function update(Request $request)
    {
        # code...
    }

    public function delete($id)
    {
        //dd($id);
        Category::destroy($id);
        return redirect('/categories');
    }
}
