@extends('backend.layouts.app')
 
@section('title', 'Edit products')
 
@section('content')

<div class="container">
    @if(session('status'))
        <script>
        Swal.fire({
            title: 'Success!',
            text: '{{ session('status') }}',
            icon: 'success',
            confirmButtonText: 'OK'
        });
        </script>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Edit Product</h6>
          <a href="{{ route('product.index') }}" class="btn btn-primary float-end">Back</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <form action="{{ route('product.update', ['id' => $product->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="name" class="form-label">Name Product</label>
                    <input type="text" name="name" class="form-control" value="{{ $product->name}}">
                </div>
                <div class="form-group mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select name="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ (isset($product) && $product->category_id == $category->id) ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control">
                    @isset($product->image)
                        <img src="{{ asset('uploads/products/'.$product->image) }}" width="100">
                    @endisset
                </div>
                <div class="form-group mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" name="price" class="form-control" value="{{ $product->price}}">
                </div>
                <div class="form-group mb-3">
                    <label for="price" class="form-label">Stock</label>
                    <input type="text" name="stock" class="form-control" value="{{ $product->stock}}">
                </div>
                <div class="form-group mb-3">
                    <label for="price" class="form-label">Sale</label>
                    <input type="text" name="sale" class="form-control" value="{{ $product->sale}}">
                </div>
                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
          </div>
        </div>
      </div>
</div>

@endsection