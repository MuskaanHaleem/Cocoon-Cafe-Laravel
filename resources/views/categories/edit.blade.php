@extends('layouts.admin') <!-- Assuming you have an admin layout -->

@section('content')
<div class="container">
    <h1>Edit Category</h1>

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="form-group mb-3">
            <label for="id">Category ID</label>
            <input type="number" name="id" id="id" class="form-control" value="{{ $category->id }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="name">Category Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update Category</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
