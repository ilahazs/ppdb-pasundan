<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>{{ config('app.name') }} | Home Page</title>

   <!-- Google Font: Source Sans Pro -->
   {{-- <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> --}}
   {{-- Icon --}}
   <link rel="icon" href="{{ asset('img/arch.svg') }}">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
   <!-- Theme style -->
   <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
   {{-- Own Css Omar --}}
   <link rel="stylesheet" href="{{ asset('omar-ppdb/form_ppdb/assets/css/style.css') }}">
   <!-- Bootstrap core CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   {{-- jQuery Yajra Datatable --}}
   <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
</head>

<body class="hold-transition sidebar-mini">
   <!-- Site wrapper -->
   <div class="wrapper">
      @include('dashboard.layouts.partials.header')
      @include('dashboard.layouts.partials.sidebar')
      @include('dashboard.layouts.partials.content')

      @yield('container')
      {{-- <div class="container">
         <div class="row">
            <main class="col-md-9 col-lg-12 px-4">
               @yield('container')
            </main>

         </div>
      </div> --}}

      {{-- @include('dashboard.layouts.partials.footer') --}}






      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
         <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
   </div>

   {{-- <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script> --}}
   {{-- jQuery - Yajra Datatable --}}
   <!-- jQuery -->
   <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   {{-- Sweet Alert --}}
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
   </script>
   {{-- Feather Icons --}}
   <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
      integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
   </script>
   <!-- AdminLTE App -->
   <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
</body>

</html>
