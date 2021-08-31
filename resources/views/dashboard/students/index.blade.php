@extends('dashboard.layouts.master')
@section('container')
   <section class="content">

      <!-- Default box -->
      <div class="card">
         <div class="card-header">
            <h3 class="card-title">Student List</h3>
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
            Data masih kosong bro!
            <div class="d-flex justify-content-end">

               <a href="/dashboard/students/create" class="badge bg-primary text-decoration-none">Tambah</a>

            </div>
         </div>
         <div class="card-footer">
            Footer
         </div>
      </div>

   </section>
   </div>

@endsection
