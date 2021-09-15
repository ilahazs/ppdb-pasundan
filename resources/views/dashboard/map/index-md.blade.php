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
                     <option value="">All</option>
                     @foreach ($classes as $class)
                        <option value="{{ $class->id }}">{{ $class->name }}</option>
                     @endforeach
                  </select>

                  {{-- <select id='class_id' class="form-control" style="width: 200px">
                     <option value="">--Select Kelas--</option>
                     <option value="1">1A</option>
                     <option value="2">1B</option>
                     <option value="3">1C</option>
                  </select> --}}
               </div>
            </div>

            <table class="table table-bordered yajra-datatable">
               <thead>
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">Nama</th>
                     <th scope="col" width="130px">Jenis Kelamin</th>
                     <th scope="col">Tempat Lahir</th>
                     <th scope="col">Tanggal Lahir</th>
                     <th scope="col">Usia</th>
                     <th scope="col">Kelas</th>

                     {{-- <th scope="col" class="text-center">Kelas</th> --}}
                  </tr>
               </thead>
               <tbody>

               </tbody>
            </table>

         </div>
      </div>

   </div>


@section('scripts')
   <script type="text/javascript">
      $(function() {

         var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
               url: "{{ route('mapstudents.list') }}",
               data: function(d) {
                  d.class_id = $('#class_id').val(),
                     d.search = $('input[type="search"]').val()
               }
            },

            columns: [{
                  data: 'id',
                  name: 'id'
               },
               {
                  data: 'nama',
                  name: 'nama'
               },
               {
                  data: 'jenis_kelamin',
                  name: 'jenis_kelamin'
               },
               {
                  data: 'tempat_lahir',
                  name: 'tempat_lahir'
               },
               {
                  data: 'tanggal_lahir',
                  name: 'tanggal_lahir'
               },
               {
                  data: 'usia',
                  name: 'usia'
               },
               {
                  data: 'class_id',
                  name: 'class_id',
                  orderable: true,
                  searchable: true
               },
            ]
         });

         $('#class_id').change(function() {
            table.draw();
         });
         $('#search').keyDown(function() {
            table.draw();
         });

      });
   </script>

@endsection
@endsection
