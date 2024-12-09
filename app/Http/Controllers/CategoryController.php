<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric|unique:categories,id', // Validate that ID is unique
            'name' => 'required|string|max:255',
        ]);
    
        Category::create([
            'id' => $request->id, // Save the custom ID
            'name' => $request->name,
            'description' => $request->description,
        ]);
    
        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }


    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

   public function update(Request $request, $id)
{
    // Validate the input data
    $request->validate([
        'id' => 'required|numeric|unique:categories,id,' . $id, // Allow current ID but ensure uniqueness for others
        'name' => 'required|string|max:255',
    ]);

    // Find the category by ID
    $category = Category::findOrFail($id);

    // Update the category with the validated data
    $category->update([
        'id' => $request->input('id'), // Update the ID
        'name' => $request->input('name'),
        'description' => $request->input('description'),
    ]);

    // Redirect back to the categories index with a success message
    return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
}

    public function destroy($id)
    {
        $category = Category::findOrFail($id); // Check if the category exists
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
    
}