@extends('layouts.admin') <!-- Extend the admin layout -->

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Welcome to Cocoon Cafe Admin Panel</h1>

    <!-- Example Cards for Admin Metrics -->
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Categories</h5>
                    <p class="card-text">Manage your categories efficiently.</p>
                    <a href="{{ route('categories.index') }}" class="btn btn-primary">View Categories</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Menu Items</h5>
                    <p class="card-text">Manage your menu items.</p>
                    <a href="{{ route('menu-items.index') }}" class="btn btn-primary">View Menu Items</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

