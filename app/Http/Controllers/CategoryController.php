<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.indeks', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

   public function store(Request $request)
{
    Category::create([
        'name' => $request->name,
        'slug' => \Illuminate\Support\Str::slug($request->name)
    ]);

    return redirect()->route('admin.categories');
}
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $category->update([
            'name' => $request->name
        ]);

        return redirect()->route('admin.categories');
    }

    public function destroy($id)
    {
        Category::findOrFail($id)->delete();

        return redirect()->route('admin.categories');
    }
}