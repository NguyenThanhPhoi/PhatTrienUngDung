@extends('backend.layouts.app')
 
@section('title', 'Form Category')
 
@section('content')
<div class="container">
  @if(session()->has('status'))
    <script>
      Swal.fire({
          title: 'Success!',
          text: "{{ session('status') }}",  // Sử dụng dấu ngoặc kép đôi để tránh lỗi cú pháp
          icon: 'success',
          confirmButtonText: 'OK'
      });
    </script>
  @endif

  @if ($errors->any())
    <script>
      Swal.fire({
          title: 'Error!',
          text: "Vui lòng nhập đầy đủ thông tin!",  // Thông báo lỗi tổng quát
          icon: 'error',
          confirmButtonText: 'OK'
      });
    </script>
  @endif
  <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add Category</h6>
        <a href="{{route('category.index')}}" class="btn btn-primary float-end">Back</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <form action="{{route('category.add')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group mb-3">
                  <label for="name" class="form-label">Name Category</label>
                  <input type="text" name="name" class="form-control">
              </div>
              <div class="form-group mb-3">
                  <button type="submit" class="btn btn-primary">Save</button>
              </div>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection
