<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class CategoryController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('admin.categories.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('category_images', 'public');
            $validatedData['image'] = $imagePath;
        }

        Category::create($validatedData);

        return redirect()->back()->with('success', 'Succées de création du catégorie!');
       // return redirect()->route('categories.index')->with('success', 'Succées de création du catégorie!');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            Storage::delete('public/' . $category->image); // Delete old image
            $imagePath = $request->file('image')->store('category_images', 'public');
            $validatedData['image'] = $imagePath;
        }
        
        $category->update($validatedData);

        return redirect()->route('categories.create')->with('success', 'Succées de modification du catégorie!');
    }

    public function destroy(Category $category){
        $category->delete();
        return redirect()->route('categories.create')->with('success', 'Succées de supprission du catégorie!');
    }

    public function showCategory(){
        $categories=Category::all();
        //return view('home.user',compact('categories'));
        return View::make('home.user')->with('categories', $categories);

    }

}
