@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Menu Items</h1>
    <a href="{{ route('menu-items.create') }}" class="btn btn-primary mb-3">Add New Menu Item</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Category</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menuItems as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>RS {{ $item->price }}</td>
                    <td>{{ $item->category }}</td>
                    <td><img src="{{ $item->image }}" alt="{{ $item->name }}" width="100"></td>
                    <td>
                        <a href="{{ route('menu-items.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('menu-items.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
