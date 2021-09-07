<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>{{ config('app.name') }} | {{ $title }}</title>

   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome -->
   <link rel="stylesheet" href={{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}>
   <!-- icheck bootstrap -->
   <link rel="stylesheet" href={{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}>
   <!-- Theme style -->
   <link rel="stylesheet" href={{ asset('assets/dist/css/adminlte.min.css') }}>
</head>

<body class="hold-transition login-page">

   <div class="login-box">
      <!-- /.login-logo -->
      <div class="card card-outline card-primary">
         <div class="card-header text-center">
            <a href="{{ route('home') }}" class="h1">Login</a>
         </div>
         <div class="card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            @if (session()->has('status'))
               <div class="alert alert-success fade show" role="alert">
                  {!! session('status') !!}
               </div>
            @endif

            @if (session()->has('statusError'))
               <div class="alert alert-danger fade show" role="alert">
                  {{ session('statusError') }}
               </div>
            @endif

            <form action="{{ route('login-authenticate') }}" method="post">
               @csrf
               <div class="input-group mb-3">
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                     placeholder="Email" required autofocus value="{{ old('email') }}">
                  @error('email')
                     <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                  <div class="input-group-append">
                     <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                     </div>
                  </div>
               </div>
               <div class="input-group mb-3">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                     required>
                  @error('password')
                     <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                  <div class="input-group-append">
                     <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                     </div>
                  </div>
               </div>
               <div class="row justify-content-center my-4">
                  {{-- <div class="col-8">
                     <div class="icheck-primary">
                        <input type="checkbox" id="remember">
                        <label for="remember">
                           Remember Me
                        </label>
                     </div>
                  </div> --}}
                  <div class="col-12">
                     <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                  </div>
               </div>
            </form>

            <div class="row">
               <div class="col-lg-12 text-center">
                  <span>Not
                     registered? <a href="{{ route('register-page') }}">
                        Register here!</a></span>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- jQuery -->
   <script src={{ asset('assets/plugins/jquery/jquery.min.js') }}></script>
   <!-- Bootstrap 4 -->
   <script src={{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>
   <!-- AdminLTE App -->
   <script src={{ asset('assets/dist/js/adminlte.min.js') }}></script>
</body>

</html>
