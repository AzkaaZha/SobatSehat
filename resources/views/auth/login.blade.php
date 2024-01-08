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
    <div class="bg order-1 order-md-2" style="background-image: url('{{ asset('auth/assets/images/gambarlogin.jpg') }} ');"></div>
    
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Login</h3>
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
                <label for="email">Email</label>
                <input type="email" value="{{ old('email') }}" class="form-control" name="email">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password">
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" />
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="{{url('/register')}}" class="forgot-pass">Belum Punya Akun ? Daftar</a></span> 
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>

              <input type="submit" value="Log In" class="btn btn-block btn-primary">

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