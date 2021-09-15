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

            <div class="row d-flex justify-content-end">
               <div class="form-kelas col-lg-2 mb-3">
                  <label for="class_id" class="form-label">Kelas</label>
                  <select class="form-select class_id" id="class_id" aria-label="class_id" name="class_id">
                     @foreach ($classes as $class)
                        <option value="{{ $class->id }}">{{ $class->name }}</option>
                     @endforeach
                  </select>
               </div>
            </div>
            <ul class="list-group">

               <table class="table table-bordered">
                  <thead>
                     <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col" width="130px">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Tangal Lahir</th>
                        <th scope="col">Usia</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($students as $student)
                        @if ($student->class_id == 1)

                           <tr>
                              <th scope="row">{{ $loop->iteration }}</th>
                              <td>{{ $student->nama }}</td>
                              <td
                                 class="{{ $student->jenis_kelamin == 'L' ? 'text-primary' : 'text-danger' }} text-center">
                                 {{ $student->jenis_kelamin }}</td>
                              <td>{{ $student->tempat_lahir }}</td>
                              <td>{{ $student->tanggal_lahir }}</td>
                              <td>{{ $student->usia . ' tahun' }}</td>

                           </tr>
                        @endif

                     @endforeach

                  </tbody>
               </table>
            </ul>


         </div>
      </div>

      {{-- <script src="{{ asset('js/form-ppdb.js') }}"></script> --}}




   </div>

@endsection
