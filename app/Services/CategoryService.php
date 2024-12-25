<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    public function getAllCategories()
    {
        return Category::all();
    }

    public function createCategory($request)
    {
        try {
            $request->validate([
                'id' => 'required|numeric|unique:categories,id',
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
            ]);

            Category::create($request->all());

            return ['success' => true, 'message' => 'Category created successfully.'];
        } catch (\Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function editCategory($id)
    {
        return Category::findOrFail($id);
    }

    public function updateCategory($request)
    {
        try {
            $request->validate([
                'id' => 'required|numeric|unique:categories,id,' . $request->id,
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
            ]);

            $category = Category::findOrFail($request->id);
            $category->update($request->all());

            return ['success' => true, 'message' => 'Category updated successfully.'];
        } catch (\Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function deleteCategory($id)
    {
        try {
            $category = Category::findOrFail($id);
            $category->delete();

            return ['success' => true, 'message' => 'Category deleted successfully.'];
        } catch (\Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }
}
