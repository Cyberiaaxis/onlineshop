@extends('Staff.layouts.staff')

@section('title', 'Edit Product')

@section('content')
<div class="container py-5"> <!-- Added padding and spacing -->

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-light rounded-3"> <!-- Modern card with rounded corners and shadow -->
                <div class="card-header bg-primary text-white text-center rounded-top">
                    <h4>{{ __('Edit Product') }}</h4>
                </div>
                <div class="card-body">
                    <!-- Display validation errors, if any -->
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <!-- Edit Product Form -->
                    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') <!-- Method spoofing for PUT request -->

                        <div class="mb-4">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" class="form-control form-control-lg rounded-3 shadow-sm" id="name" name="name" value="{{ old('name', $product->name) }}" required placeholder="Enter product name">
                        </div>

                        <div class="mb-4">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control form-control-lg rounded-3 shadow-sm" id="description" name="description" rows="5" required placeholder="Enter product description">{{ old('description', $product->description) }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label for="category_id" class="form-label">Category</label>
                            <select class="form-select form-control-lg rounded-3 shadow-sm" id="category_id" name="category_id" required>
                                <option value="" disabled>Select a category</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $category->id == old('category_id', $product->category_id) ? 'selected' : '' }}>
                                    {{ $category->category_name }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="price" class="form-label">Price</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" step="0.01" class="form-control form-control-lg rounded-3 shadow-sm" id="price" name="price" value="{{ old('price', $product->price) }}" required placeholder="Enter product price">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" class="form-control form-control-lg rounded-3 shadow-sm" id="quantity" name="quantity" value="{{ old('quantity', $product->quantity) }}" required placeholder="Enter product quantity">
                        </div>

                        <div class="mb-4">
                            <label for="image" class="form-label">Product Image</label>
                            <input type="file" class="form-control form-control-lg rounded-3 shadow-sm" id="image" name="image">

                            <!-- Display existing image (if available) -->
                            @if($product->image)
                            <div class="mt-3">
                                <img src="{{ asset('storage/images/' . $product->image) }}" alt="Product Image" class="img-fluid" width="100">
                                <p class="mt-2">Current Image</p>
                            </div>
                            @endif
                        </div>

                        <!-- Add the is_active toggle -->
                        <div class="mb-4 form-check">
                            <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" {{ old('is_active', $product->is_active) ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_active">Product is Active</label>
                        </div>

                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-success btn-lg shadow-lg">Update Product</button> <!-- Larger button with shadow -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection