@extends('Staff.layouts.staff')

@section('title', 'Products')

@section('content')

<!-- Display the success message -->
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="container m-0 p-0">

    <!-- Row for Title and Button (Responsive) -->
    <div class="row mb-3">
        <!-- Left-aligned title on large screens and center-aligned on small screens -->
        <div class="col-12 col-md-6 d-flex justify-content-start mb-2 mb-md-0">
            <h4>Product Management</h4>
        </div>

        <!-- Right-aligned button on large screens and center-aligned on small screens -->
        <div class="col-12 col-md-6 d-flex justify-content-end">
            <a href="{{ route('products.create') }}" class="btn btn-primary">
                <i class="fas fa-plus-circle"></i> Add Product
            </a>
        </div>
    </div>

    <!-- Product Table -->
    <div class="row">
        <div class="col-12">
            <div class="table-responsive"> <!-- This ensures horizontal scroll on small screens -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Price</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr class="{{ session('lastInsertedProduct') == $product->id ? 'bg-info text-white' : '' }}">
                            <th scope="row">{{ $product->id }}</th>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category->category_name }}</td>
                            <td>${{ number_format($product->price, 2) }}</td>
                            <td>
                                <!-- Product Status -->
                                <span class="badge {{ $product->is_active ? 'bg-success' : 'bg-danger' }}"
                                    data-bs-toggle="tooltip" title="{{ $product->is_active ? 'Product is Active' : 'Product is Disabled' }}">
                                    {{ $product->is_active ? 'Active' : 'Disabled' }}
                                </span>
                            </td>
                            <td>
                                <!-- Edit Button with Tooltip -->
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm"
                                    data-bs-toggle="tooltip" title="Edit Product" data-bs-placement="top" data-bs-custom-class="tooltip-warning">
                                    <i class="fas fa-edit"></i>
                                </a>


                                <!-- Delete Button with Tooltip -->
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" title="Delete Product" data-bs-custom-class="tooltip-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection