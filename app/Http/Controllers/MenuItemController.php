<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;

class MenuItemController extends Controller
{

    public function showOrderPage()
{
    $menuItems = MenuItem::all();
    return view('order', compact('menuItems'));
}
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $menuItems = MenuItem::all();
        return view('menu-items.index', compact('menuItems'));
    }    

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('menu-items.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            'image' => 'required|url',
        ]);
        MenuItem::create($validated);
        return redirect()->route('menu-items.index')->with('success', 'Menu item added successfully!');
    }    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) {
        $menuItem = MenuItem::findOrFail($id);
        return view('menu-items.edit', compact('menuItem'));
    }    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
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
    
}
