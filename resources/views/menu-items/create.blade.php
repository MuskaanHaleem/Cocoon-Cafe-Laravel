@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Add New Menu Item</h1>
    <form action="{{ route('menu-items.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter item name" required>
        </div>
        <div class="form-group mb-3">
            <label for="price">Price</label>
            <input type="number" step="1" name="price" id="price" class="form-control" placeholder="Enter item price" required>
        </div>
        <div class="form-group mb-3">
            <label for="category_id">Category</label>
            <select name="category_id" id="category_id" class="form-control" required>
                <option value="" disabled selected>Select a category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="image">Image</label>
            <input type="file" class="form-control-file" id="image" name="image" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
