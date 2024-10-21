@extends('backend.layouts.app')

@section('title', 'Dashboard')

@section('content')
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
    <h1>Category</h1>
    <a href="{{ route('product.create') }}" type="button" class="btn btn-primary">Create Product</a>
    <table class="table table-striped">
        <thead>
            <tr>
              <th scope="col">STT</th>
              <th scope="col">Name product</th>
              <th scope="col">Category</th>
              <th scope="col">Image</th>
              <th scope="col">Price</th>
              <th scope="col">Stock</th>
              <th scope="col">Sale</th>
              <th scope="col">Description</th>
              <th scope="col">Actions</th>
            </tr>
        </thead>

        <tbody>
            @php
                $stt = 1;
            @endphp

            @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ $stt++ }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td><img src="{{ asset('uploads/products/'.$product->image) }}" width="100px" alt=""></td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->sale }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger" onclick="confirmDelete('{{route('product.delete', $product->id)}}')">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        function confirmDelete(url) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Cancel',
                confirmButtonText: 'Delete it!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url;
                }
            })
        }
    </script>
    <script>
  function confirmDelete(url) {
      Swal.fire({
          title: 'Are you sure?',
          text: 'You will not be able to recover this product!',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, delete it!',
          cancelButtonText: 'No, cancel!',
          reverseButtons: true
      }).then((result) => {
          if (result.isConfirmed) {
              window.location.href = url;
          }
      });
  }
</script>
@endsection
