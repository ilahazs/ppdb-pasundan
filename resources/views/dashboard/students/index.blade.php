@extends('dashboard.layouts.master')
@section('container')

   <div class="container">
      <div class="row">
         <div class="col-lg-12 px-4 pb-5">

            @if (session()->has('status'))
               <div class="col-md-8">
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                     {!! session('status') !!}
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
               </div>
            @endif

            <div class="d-flex justify-content-end">
               <a href="/dashboard/students/create" class="badge bg-primary mb-3"><i class="fas fa-plus"></i></a>
            </div>
            <ul class="list-group">
               @foreach ($students as $student)
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                     {{ $student->nama }}

                     <div class="justify-content-end">
                        <a href="/dashboard/students/{{ $student->id }}" class="badge bg-info"><i
                              class="far fa-eye"></i></a>
                        <a href="/dashboard/students/{{ $student->id }}/edit" class="badge bg-success"><i
                              class="far fa-edit "></i></a> {{-- fas fa-user-edit --}}
                        <form action="/dashboard/students/{{ $student->id }}" method="post" class="d-inline">
                           @method('delete')
                           @csrf
                           <button type="submit" class="badge bg-danger" id="show_confirm" data-toggle="tooltip"
                              title="Delete">
                              <i class="far fa-trash-alt"></i>
                           </button>
                        </form>
                     </div>
                  </li>
               @endforeach
            </ul>

         </div>
      </div>
   </div>

   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script>
      $('#show_confirm').click(function(event) {

         var form = $(this).closest("form");
         var name = $(this).data("nama");
         event.preventDefault();

         swal({
               title: `Are you sure you want to delete this record?`,
               text: "If you delete this, it will be gone forever.",
               icon: "warning",
               buttons: true,
               dangerMode: true,
            })

            .then((willDelete) => {
               if (willDelete) {
                  form.submit();
               }
            });
      });
   </script>
@endsection
