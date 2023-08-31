<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('admin.courses.index', compact('courses'));
    }

    public function show($id){
        $course=Course::findOrFail($id);
        return view('home.show', compact('course'));
    }

    public function create()
    {
        $categories = Category::all();
        $courses = Course::all();
        return view('admin.courses.create', compact('categories', 'courses'));
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'for_whom' => 'nullable|string',
            'program' => 'nullable|string',
            'objectif' => 'nullable|string',
            'certificate' => 'nullable|string',
            'key_strengths' => 'nullable|string',
            'financement' => 'nullable|string',
            'duration' => 'nullable|string',
            'price' => 'nullable|string',
            'prerequisites' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('courses_images', 'public');
            $validatedData['image'] = $imagePath;
        }

        Course::create($validatedData);

        return redirect()->route('courses.create')->with('message', 'Formation ajoutée avec succées !');
    }

    public function edit(Course $course)
    {
        $categories = Category::all();
        return view('admin.courses.edit', compact('course', 'categories'));
    }

    public function update(Request $request, Course $course)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'for_whom' => 'nullable|string',
            'program' => 'nullable|string',
            'objectif' => 'nullable|string',
            'certificate' => 'nullable|string',
            'key_strengths' => 'nullable|string',
            'financement' => 'nullable|string',
            'duration' => 'nullable|string',
            'price' => 'nullable|string',
            'prerequisites' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($request->hasFile('image')) {
            Storage::delete('public/' . $course->image); // Delete old image
            $imagePath = $request->file('image')->store('courses_images', 'public');
            $validatedData['image'] = $imagePath;
        }

        $course->update($validatedData);

        return redirect()->route('courses.create')->with('success', 'Formation modifiée avec succés!');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.create')->with('success', 'Succées de supprission du formation!');
    }

    public function coursesByCategory($categoryId)
    {
        $category = Category::findOrFail($categoryId);
        $courses = $category->courses; // Assuming you have a relationship set up in your Category model
        return view('home.teachers', compact('category', 'courses'));
    }
}
