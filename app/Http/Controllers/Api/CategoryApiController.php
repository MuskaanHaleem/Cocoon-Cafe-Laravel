<?php

namespace App\Http\Controllers\Api;

use App\Services\CategoryService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryApiController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        try {
            $data = $this->categoryService->getAllCategories();
            return response()->json($data, 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric|unique:categories,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $response = $this->categoryService->createCategory($request);
        return response()->json($response);
    }

    public function show($id)
    {
        try {
            $response = $this->categoryService->editCategory($id);
            return response()->json($response);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric|exists:categories,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $response = $this->categoryService->updateCategory($request);
        return response()->json($response);
    }

    public function destroy($id)
    {
        try {
            $response = $this->categoryService->deleteCategory($id);
            return response()->json($response);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
}
