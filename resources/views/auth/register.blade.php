<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('auth/assets/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('auth/assets/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('auth/assets/css/bootstrap.min.css') }}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('auth/assets/css/style.css') }}">

    <title>Login | Sobat Sehat</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-2 order-md-1 " style="background-image: url('{{ asset('auth/assets/images/gambarlogin.jpg') }} ');"></div>
    
    <div class="contents order-1 order-md-2">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-10">
            <h3 style="font-weight:bold">DAFTAR</h3>
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $errors)
                    <li>{{ $errors }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <form action="" method="POST">
              @csrf
              <div class="form-group first">
                <label for="name">Username</label>
                <input type="text" class="form-control" name="name" value="{{old('name')}}">
              </div>
              <div class="form-group first">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password">
              </div>
              <div class="form-group last mb-3">
                <label for="password_confirm">Konfirmasi Password</label>
                <input type="password" class="form-control" name="password_confirm">
              </div>

              <div class="col-md-6">
                <input type="submit" value="Daftar" class="btn btn-block btn-primary">
              </div>
              <div class="d-flex mb-5 align-items-center">
                <span class="ml-auto"><a href="{{url('/login')}}" class="forgot-pass">Sudah Punya Akun ? Login</a></span> 
              </div>
              

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script src="{{ asset('auth/assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('auth/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('auth/assets/js/bootstrap.min.js') }}></script>
    <script src="{{ asset('auth/assets/js/main.js') }}"></script>
  </body>
</html>