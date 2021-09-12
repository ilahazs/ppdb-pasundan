@extends('dashboard.layouts.master')
@section('container')

   <div class="container">
      <div class="row">
         @if (session()->has('status'))
            <div class="col-md-8">
               <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {!! session('status') !!}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
            </div>
         @endif
         @if (Request::has('message'))
            {{ Request::input('message') }}
         @endif
         <div class="col-lg-6 px-3 pb-5">

            <h4 class="mt-2 mb-3">{{ __('Daftar Siswa Pending') }}</h3>

               <ul class="list-group">
                  @foreach ($students as $student)
                     @if ($student->status == 'pending')
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                           {{ $student->nama }}

                           <div class="justify-content-end">
                              <a href="#" class="badge bg-info" data-bs-toggle="modal"
                                 data-bs-target="#ModalShow{{ $student->id }}"><i class="far fa-eye"></i></a>
                              @include('dashboard.students.modal.show')

                              <form action="{{ route('transaction.destroy', $student->id) }}" method="post"
                                 class="d-inline" onsubmit="return confirm('Yakin hapus data ini?')">
                                 @method('delete')
                                 @csrf
                                 <button type="submit" class="badge bg-danger" id="show_confirm" data-toggle="tooltip"
                                    title="Delete">
                                    <i class="far fa-trash-alt"></i>
                                 </button>
                              </form>

                              <form action="{{ route('transaction.update', $student->id) }}" method="post"
                                 class="d-inline" onsubmit="return confirm('Yakin pindahkan data ini?')">
                                 @method('patch')
                                 @csrf
                                 @include('dashboard.transaction.input-transaction')
                                 {{-- <input type="hidden" name="status" value="accepted"> --}}
                                 <button type="submit" class="badge bg-success" id="show_confirm" data-toggle="tooltip"
                                    title="Move">
                                    <i class="fas fa-arrow-right"></i>
                                 </button>
                              </form>

                           </div>
                        </li>
                     @endif
                  @endforeach
               </ul>


         </div>

         <div class="col-lg-6 px-3 pb-5">
            <h4 class="mt-2 mb-3">{{ __('Daftar Siswa Diterima') }}</h3>

               <ul class="list-group">
                  @foreach ($students as $student)
                     @if ($student->status == 'accepted')
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                           {{ $student->nama }}

                           <div class="justify-content-end">
                              <a href="#" class="badge bg-info" data-bs-toggle="modal"
                                 data-bs-target="#ModalShow{{ $student->id }}"><i class="far fa-eye"></i></a>
                              @include('dashboard.students.modal.show')
                              <a href="{{ route('transaction.edit', $student->id) }}" class="badge bg-success">
                                 <i class="far fa-edit"></i></a>
                           </div>
                        </li>
                     @endif
                  @endforeach
               </ul>
         </div>
      </div>





   </div>

@endsection