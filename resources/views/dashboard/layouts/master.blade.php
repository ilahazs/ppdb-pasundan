<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>{{ config('app.name') }} | Home Page</title>

   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
   <!-- Theme style -->
   <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition sidebar-mini">
   <!-- Site wrapper -->
   <div class="wrapper">
      @include('dashboard.layouts.partials.header')
      @include('dashboard.layouts.partials.sidebar')
      @include('dashboard.layouts.partials.content')

      @yield('container')





      <footer class="main-footer">
         <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.1.0
         </div>
         <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
         <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
   </div>

   <!-- jQuery -->
   <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
   <!-- Bootstrap 4 -->
   <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   <!-- AdminLTE App -->
   <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
</body>

</html>
