<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;
use App\Models\Category;

class MenuItemController extends Controller
{
    public function showOrderPage()
    {
        $menuItems = MenuItem::with('category')->get();
        $categories = Category::all();
        return view('order', compact('categories', 'menuItems'));
    }

    public function index()
    {
        $menuItems = MenuItem::with('category')->get();
        return view('menu-items.index', compact('menuItems'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('menu-items.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);
    
        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension(); // Example: 1696601234.jpg
            $image->move(public_path('images'), $fileName); // Save image to public/images
            $validated['image'] = 'images/' . $fileName; // Save path to the database
        }
    
        MenuItem::create($validated);
    
        return redirect()->route('menu-items.index')->with('success', 'Menu item added successfully!');
    }
    
    
    public function edit($id)
    {
        $menuItem = MenuItem::findOrFail($id);
        $categories = Category::all();
        return view('menu-items.edit', compact('menuItem', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $menuItem = MenuItem::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension(); // Example: 1696601234.jpg
            $image->move(public_path('images'), $fileName); // Save image to public/images
            $validated['image'] = 'images/' . $fileName; // Save path to the database
        }

        $menuItem->update($validated);
        return redirect()->route('menu-items.index')->with('success', 'Menu item updated successfully!');
    }

    public function destroy($id)
    {
        $menuItem = MenuItem::findOrFail($id);
        $menuItem->delete();
        return redirect()->route('menu-items.index')->with('success', 'Menu item deleted successfully!');
    }

    public function filterRecipes(Request $request)
    {
        $searchTerm = $request->input('searchTerm');
        $categoryId = $request->input('category');

        $query = MenuItem::query();

        if ($searchTerm) {
            $query->where('name', 'LIKE', '%' . $searchTerm . '%');
        }

        if ($categoryId && $categoryId !== 'all') {
            $query->where('category_id', $categoryId);
        }

        $menuItems = $query->get();
        return response()->json($menuItems);
    }
}
