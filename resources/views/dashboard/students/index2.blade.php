@extends('dashboard.layouts.master')
@section('container')
   {{-- <section class="content">


   </section> --}}
   <div class="table-responsive pb-5">
      <div class="d-flex justify-content-end">
         <a href="/dashboard/students/create" class="badge bg-primary mb-3"><i class="fas fa-plus"></i></a>
      </div>
      <table class="table table-bordered border-dark table-lg">
         <thead class="table-dark">
            <tr>
               <th scope="col">No.</th>
               <th scope="col">Nama</th>
               <th scope="col">Telepon</th>
               {{-- <th scope="col">Jenis Kelamin</th>
               <th scope="col">Tempat Lahir</th>
               <th scope="col">Tanggal Lahir</th> --}}
               <th scope="col">Agama</th>
               <th scope="col">Jalur</th>
               <th scope="col">Action</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($students as $student)
               <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $student->nama }}</td>
                  <td>{{ $student->telp }}</td>
                  {{-- <td>{{ $student->jenis_kelamin }}</td>
                  <td>{{ $student->tempat_lahir }}</td>
                  <td>{{ $student->tanggal_lahir }}</td> --}}
                  <td>{{ $student->religion->name }}</td>
                  <td>{{ $student->path->name }}</td>
                  <td>
                     <a class="badge bg-info" href="/dashboard/students/{{ $student->id }}"><i
                           class="far fa-eye"></i></a>
                     <a class="badge bg-success" href="/dashboard/students/edit/{{ $student->id }}"><i
                           class="far fa-edit "></i></a> {{-- fas fa-user-edit --}}
                     <a class="badge bg-danger" href="/dashboard/students/delete/{{ $student->id }}"><i
                           class="far fa-trash-alt"></i></a>
                  </td>
               </tr>
            @endforeach
         </tbody>
      </table>
   </div>

@endsection
