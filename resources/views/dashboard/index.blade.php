@extends('dashboard.layouts.master')
@section('container')
   @if (session()->has('successLogin'))
      <div class="col-md-8">
         <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('successLogin') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
      </div>
   @endif
   <section class="content">

      <!-- Default box -->
      {{-- <div class="card">
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
      </div> --}}
      <div class="card mb-3" style="max-width: 540px;">
         <div class="row g-lg-0">
            <div class="col-md-2">
               <img src="{{ Avatar::create(auth()->user()->name)->toBase64() }}" class="img-fluid px-3 py-3"
                  alt="User Image">
            </div>
            <div class="col-md-10">
               <div class="card-body">
                  <h5 class="card-title">Welcome back, {{ auth()->user()->name }}!</h5>
                  <p class="card-text" style="color: rgb(70, 70, 70)">email: {{ auth()->user()->email }}
                     <br>username: {{ auth()->user()->username }}
                  </p>
                  <p class="card-text"><small class="text-muted">Last updated
                        {{ auth()->user()->created_at->diffForHumans() }}</small></p>
               </div>
            </div>
         </div>
      </div>

   </section>
   <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->

@endsection
