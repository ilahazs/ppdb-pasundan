@extends('dashboard.layouts.master')
@section('container')
   {{-- <section class="content">

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
            <div
               class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
               <h1 class="h2">My Posts</h1>
            </div>

            <div class="table-responsive">
               <div class="d-flex justify-content-end">
                  <a href="/dashboard/posts/create" class="badge bg-primary mb-3"><span data-feather="plus"></span></a>
               </div>
               <table class="table table-striped table-lg">
                  <thead>
                     <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($posts as $post)
                        <tr>
                           <td>{{ $loop->iteration }}</td>
                           <td>{{ $post->title }}</td>
                           <td>{{ $post->author->name }}</td>
                           <td>{{ $post->category->name }}</td>
                           <td>
                              <a class="badge bg-info" href="/dashboard/posts/{{ $post->slug }}"><span
                                    data-feather="eye"></span></a>
                              <a class="badge bg-success" href="/dashboard/posts/edit/{{ $post->id }}"><span
                                    data-feather="edit"></span></a>
                              <a class="badge bg-danger" href="/dashboard/posts/delete/{{ $post->id }}"><span
                                    data-feather="x-circle"></span></a>

                           </td>
                        </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
         <div class="card-footer">
            Footer
         </div>
      </div>

   </section> --}}
   <div class="table-responsive">
      <div class="d-flex justify-content-end">
         <a href="/dashboard/students/create" class="badge bg-primary mb-3"><i class="fas fa-plus"></i></a>
      </div>
      <table class="table table-striped table-sm">
         <thead>
            <tr>
               <th scope="col">#</th>
               <th scope="col">Nama</th>
               <th scope="col">Telepon</th>
               <th scope="col">Jenis Kelamin</th>
               <th scope="col">Tempat Lahir</th>
               <th scope="col">Tanggal Lahir</th>
               <th scope="col">Agama</th>
               <th scope="col">Jalur</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($students as $student)
               <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $student->nama }}</td>
                  <td>{{ $student->telp }}</td>
                  <td>{{ $student->jenis_kelamin }}</td>
                  <td>{{ $student->tempat_lahir }}</td>
                  <td>{{ $student->tanggal_lahir }}</td>
                  <td>{{ $student->religion->name }}</td>
                  <td>{{ $student->path->name }}</td>
               </tr>
            @endforeach
         </tbody>
      </table>
   </div>

@endsection
