@extends('dashboard.layouts.master')
@section('container')
   @if (session()->has('successLogin'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
         {{ session('successLogin') }}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
   @endif

   <section class="content">

      <!-- Default box -->
      <div class="card">
         <div class="card-header">
            <h3 class="card-title">Welcome back, {{ auth()->user()->name }}!</h3>
            <div class="card-tools">
               <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
               </button>
               <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
               </button>
            </div>
         </div>
         <div class="card-body">
            Start creating your amazing application!
         </div>
         <div class="card-footer">
            Footer
         </div>
      </div>

   </section>
   <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->

@endsection
