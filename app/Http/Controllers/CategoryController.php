<?php

namespace App\Http\Controllers;

use App\Services\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $categories = $this->categoryService->getAllCategories();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $response = $this->categoryService->createCategory($request);
        Session::flash('message', $response['message']);
        Session::flash('alert-class', $response['success'] ? 'alert-success' : 'alert-danger');
        return redirect()->route('categories.index');
    }

    public function edit($id)
    {
        $category = $this->categoryService->editCategory($id);
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request)
    {
        $response = $this->categoryService->updateCategory($request);
        Session::flash('message', $response['message']);
        Session::flash('alert-class', $response['success'] ? 'alert-success' : 'alert-danger');
        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        $response = $this->categoryService->deleteCategory($id);
        Session::flash('message', $response['message']);
        Session::flash('alert-class', $response['success'] ? 'alert-success' : 'alert-danger');
        return redirect()->route('categories.index');
    }

}
