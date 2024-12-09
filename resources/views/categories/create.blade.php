@extends('layouts.admin') <!-- Assuming you have an admin layout -->

@section('content')
<div class="container">
    <h1>Add New Category</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="id">Category ID</label>
            <input type="number" name="id" id="id" class="form-control" placeholder="Enter category ID" required>
        </div>

        <div class="form-group mb-3">
            <label for="name">Category Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter category name" required>
        </div>

        <button type="submit" class="btn btn-success">Save Category</button>
    </form>
</div>
@endsection
