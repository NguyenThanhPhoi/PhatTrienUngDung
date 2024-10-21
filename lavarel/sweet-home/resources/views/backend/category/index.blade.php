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
    <a href="{{ route('category.create') }}" type="button" class="btn btn-primary">Create Category</a>
    <table class="table table-striped">
        <thead>
            <tr>
              <th scope="col">STT</th>
              <th scope="col">Name category</th>
              <th scope="col">Actions</th>
            </tr>
        </thead>

        <tbody>
            @php
                $stt = 1;
            @endphp

            @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{ $stt++ }}</th>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger" onclick="confirmDelete('{{route('category.delete', $category->id)}}')">Delete</a>
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
    </script><script>
  function confirmDelete(url) {
      Swal.fire({
          title: 'Are you sure?',
          text: 'You will not be able to recover this category!',
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
