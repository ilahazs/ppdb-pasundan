<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>AdminLTE 3 | Registration Page (v2)</title>

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

<body class="hold-transition register-page">
   <div class="register-box">
      <div class="card card-outline card-primary">
         <div class="card-header text-center">
            <a href="{{ route('home') }}" class="h1">Register</a>
         </div>
         <div class="card-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="{{ route('register-authenticate') }}" method="POST">
               @csrf
               <div class="input-group mb-3">
                  <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" id="name"
                     name="name" placeholder="Name" required value="{{ old('name') }}">
                  @error('name')
                     <div class="invalid-feedback">
                        {{ $message }}
                     </div>
                  @enderror
                  <div class="input-group-append">
                     <div class="input-group-text">
                        <span class="fas fa-user"></span>
                     </div>
                  </div>
               </div>

               <div class="input-group mb-3">
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                     placeholder="name@example.com" required value="{{ old('email') }}">
                  @error('email')
                     <div class="invalid-feedback">
                        {{ $message }}
                     </div>
                  @enderror
                  <div class="input-group-append">
                     <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                     </div>
                  </div>
               </div>


               <div class="input-group mb-3">
                  <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror"
                     id="password" name="password" placeholder="Password" required>
                  @error('password')
                     <div class="invalid-feedback">
                        {{ $message }}
                     </div>
                  @enderror
                  <div class="input-group-append">
                     <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                     </div>
                  </div>
               </div>
               {{-- <div class="input-group mb-3">
                  <input type="password" class="form-control" placeholder="Retype password">
                  <div class="input-group-append">
                     <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                     </div>
                  </div>
               </div> --}}
               <div class="row justify-content-center my-4">
                  <div class="col-12">
                     <button type="submit" class="btn btn-primary btn-block">Register</button>
                  </div>
               </div>
            </form>

            <div class="row">
               <div class="col-lg-12 text-center">
                  <span>Already
                     registered? <a href="{{ route('login-page') }}">
                        Login here!</a></span>
               </div>
            </div>
         </div>
         <!-- /.form-box -->
      </div><!-- /.card -->
   </div>
   <!-- /.register-box -->

   <!-- jQuery -->
   <script src={{ asset('assets/plugins/jquery/jquery.min.js') }}></script>
   <!-- Bootstrap 4 -->
   <script src={{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>
   <!-- AdminLTE App -->
   <script src={{ asset('assets/dist/js/adminlte.min.js') }}></script>
</body>

</html>
