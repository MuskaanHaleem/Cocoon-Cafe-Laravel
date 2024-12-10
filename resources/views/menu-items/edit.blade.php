@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Menu Item</h1>
    <form action="{{ route('menu-items.update', $menuItem->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <!-- Name Field -->
        <div class="form-group mb-3">
            <label for="name">Name</label>
            <input 
                type="text" 
                name="name" 
                id="name" 
                class="form-control" 
                value="{{ $menuItem->name }}" 
                required>
        </div>

        <!-- Price Field -->
        <div class="form-group mb-3">
            <label for="price">Price</label>
            <input 
                type="number" 
                step="1" 
                name="price" 
                id="price" 
                class="form-control" 
                value="{{ $menuItem->price }}" 
                required>
        </div>

        <!-- Category Dropdown -->
        <div class="form-group mb-3">
            <label for="category_id">Category</label>
            <select 
                name="category_id" 
                id="category_id" 
                class="form-control" 
                required>
                <option value="" disabled>Select a category</option>
                @foreach ($categories as $category)
                    <option 
                        value="{{ $category->id }}" 
                        {{ $menuItem->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Image Field -->
        <div class="form-group mb-3">
            <label for="image">Image</label>
            <input 
                type="file" 
                name="image" 
                id="image" 
                class="form-control">
            <small class="text-muted">Leave blank if you don't want to change the image.</small>
        </div>

        <!-- Existing Image Preview -->
        <div class="form-group mb-3">
            <label>Current Image</label>
            <div>
                <img src="{{ asset('images/' . $menuItem->image) }}" alt="{{ $menuItem->name }}" class="img-thumbnail" width="150">
            </div>
        </div>

        <!-- Submit and Cancel Buttons -->
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('menu-items.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
