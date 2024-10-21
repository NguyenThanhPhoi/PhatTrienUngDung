<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{ asset('js/sweetalert2@11.js')}}"></script>

    <style>
        .card {
            width: 400px;
        }
    </style>
</head>

<body>
    @if(session()->has('status'))
    <script>
      Swal.fire({
          title: 'Error!',
          text: "{{ session('status') }}", 
          icon: 'error',
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

    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col-md-12">
                <div class="card p-4 shadow">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Welcome Back!</h2>
                        <form action="{{ route('login.admin.action') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.min.js')}}"></script>


</body>

</html>
