@extends('layouts.web')

@section('content')
<div class="container my-4">
    <div class="row">
        <div class="col-md-5 mb-3">
            <input type="text" class="form-control" id="searchInput" placeholder="Search menu...">
        </div>
        <div class="col-md-5 mb-3">
            <select class="form-select" id="categoryFilter">
                <option value="all">All Categories</option>
                <option value="breakfast">Breakfast</option>
                <option value="appetizers">Appetizers</option>
                <option value="main course">Main Course</option>
                <option value="desserts">Desserts</option>
                <option value="drinks">Drinks</option>
            </select>
        </div>
    </div>
</div>
<div class="container">
    <div class="row" id="recipeContainer">
        @foreach ($menuItems as $item)
            <div class="col-md-4 mb-4 recipe-card" data-category="{{ $item->category }}">
                <div class="card">
                    <img src="{{ $item->image }}" class="card-img-top" alt="{{ $item->name }}">
                    <div class="card-body">
                        <h5 class="card-title"><strong>{{ $item->name }}</strong></h5>
                        <p class="card-text"><strong>Price:</strong> RS {{ $item->price, 0 }}/-</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
