@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Add New Menu Item</h1>
    <form action="{{ route('menu-items.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" step="1" name="price" id="price" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select name="category" id="category" class="form-control" required>
                <option value="breakfast">Breakfast</option>
                <option value="appetizers">Appetizers</option>
                <option value="main course">Main Course</option>
                <option value="desserts">Desserts</option>
                <option value="drinks">Drinks</option>
            </select>
        </div>
        <div class="form-group">
            <label for="image">Image URL</label>
            <input type="text" name="image" id="image" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
