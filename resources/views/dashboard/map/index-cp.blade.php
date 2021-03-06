<!DOCTYPE html>
<html>

<head>
   <title>Laravel 8|7 Datatables Tutorial</title>
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.2/datatables.min.css" />
</head>

<body>

   <div class="container mt-5">
      <h2 class="mb-4">Laravel 7|8 Yajra Datatables Example</h2>
      <table class="table table-bordered yajra-datatable">
         <thead>
            <tr>
               <th>No</th>
               <th>Nama</th>
               <th>Tempat Lahir</th>
               <th>Tanggal Lahir</th>
               <th>Usia</th>
               <th>Action</th>
            </tr>
         </thead>
         <tbody>
         </tbody>
      </table>
   </div>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
</script>

<script type="text/javascript">
   $(function() {

      var table = $('.yajra-datatable').DataTable({
         processing: true,
         serverSide: true,
         ajax: "{{ route('mapstudents.list') }}",
         columns: [{
               data: 'DT_RowIndex',
               name: 'DT_RowIndex'
            },
            {
               data: 'nama',
               name: 'nama'
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
               data: 'action',
               name: 'action',
               orderable: true,
               searchable: true
            },
         ]
      });

   });
</script>

</html>
