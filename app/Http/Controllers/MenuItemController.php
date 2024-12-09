<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;
use App\Models\Category;

class MenuItemController extends Controller
{
    public function showOrderPage()
    {
        $menuItems = MenuItem::with('category')->get(); // Load categories for the menu items
        $categories = Category::all();
        return view('order', compact('categories', 'menuItems'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index() {
        $menuItems = MenuItem::with('category')->get(); // Eager load category relationship
        return view('menu-items.index', compact('menuItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        $categories = Category::all(); // Fetch all categories for the dropdown
        return view('menu-items.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id', // Ensure the category exists
            'image' => 'required|url',
        ]);

        MenuItem::create($validated);
        return redirect()->route('menu-items.index')->with('success', 'Menu item added successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) {
        $menuItem = MenuItem::findOrFail($id);
        $categories = Category::all(); // Fetch all categories for the dropdown
        return view('menu-items.edit', compact('menuItem', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id', // Ensure the category exists
            'image' => 'required|url',
        ]);

        $menuItem = MenuItem::findOrFail($id);
        $menuItem->update($validated);
        return redirect()->route('menu-items.index')->with('success', 'Menu item updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {
        $menuItem = MenuItem::findOrFail($id);
        $menuItem->delete();
        return redirect()->route('menu-items.index')->with('success', 'Menu item deleted successfully!');
    }

    public function filterRecipes(Request $request)
    {
        $searchTerm = $request->input('searchTerm');
        $categoryId = $request->input('category');
    
        // Query the menu items based on search term and category
        $query = MenuItem::query();
    
        if ($searchTerm) {
            $query->where('name', 'LIKE', '%' . $searchTerm . '%');
        }
    
        if ($categoryId && $categoryId !== 'all') {
            $query->where('category_id', $categoryId);
        }
    
        $menuItems = $query->get();
    
        // Return the filtered menu items as JSON
        return response()->json($menuItems);
    }
    


}
