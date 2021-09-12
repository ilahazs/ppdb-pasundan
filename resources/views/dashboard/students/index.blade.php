@extends('dashboard.layouts.master')
@section('container')

   <div class="container">
      <div class="row">
         <div class="col-lg-12 px-4 pb-5">

            @if (session()->has('success'))
               <div class="col-md-8">
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                     {!! session('success') !!}
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
               </div>
            @endif

            <div class="d-flex justify-content-end">
               <a href="#" class="badge bg-primary mb-3" data-bs-toggle="modal" data-bs-target="#ModalCreate"><i
                     class="fas fa-plus"></i></a>
               @include('dashboard.students.modal.create')
               {{-- <a href="/dashboard/students/create" class="badge bg-primary mb-3"><i class="fas fa-plus"></i></a> --}}

            </div>
            <ul class="list-group">
               @foreach ($students as $student)
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                     {{ $student->nama }}

                     <div class="justify-content-end">
                        <a href="#" class="badge bg-info" data-bs-toggle="modal"
                           data-bs-target="#ModalShow{{ $student->id }}"><i class="far fa-eye"></i></a>
                        {{-- <a href="#" class="badge bg-success" data-bs-toggle="modal"
                           data-bs-target="#ModalEdit{{ $student->id }}"><i class="far fa-edit "></i></a> --}}
                        <a href="/dashboard/students/{{ $student->id }}/edit" class="badge bg-success">
                           <i class="far fa-edit"></i></a>
                        {{-- fas fa-user-edit --}}
                        <form action="{{ route('students.destroy', $student->id) }}" method="post" class="d-inline"
                           onsubmit="return confirm('Yakin hapus data ini?')">
                           @method('delete')
                           @csrf
                           <button type="submit" class="badge bg-danger" id="show_confirm" data-toggle="tooltip"
                              title="Delete">
                              <i class="far fa-trash-alt"></i>
                           </button>
                        </form>
                     </div>
                  </li>

                  @include('dashboard.students.modal.show')






               @endforeach
            </ul>


         </div>
      </div>

      {{-- <script src="{{ asset('js/form-ppdb.js') }}"></script> --}}




   </div>

@endsection
