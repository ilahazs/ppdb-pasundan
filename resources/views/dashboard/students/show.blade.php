@extends('dashboard.layouts.master')
@section('container')

   <div class="row">
      <div class="col-lg-10 mx-4 my-3">
         <div class="table-responsive">

            <table class="table table-bordered border-secondary table-lg">
               <tbody>
                  <tr>
                     <th scope="col" class="bg-primary text-white"
                        style="width:  20%; border-left: 1px solid; border-bottom: 1px solid white; border-right: 1px solid black">
                        Nama</th>
                     <td class="d-flex justify-content-between px-3" style="border-right: 1px solid">{{ $student->nama }}
                     </td>
                  </tr>
                  <tr>
                     <th scope="row" class="bg-primary text-white"
                        style="width:  20%; border-left: 1px solid; border-bottom: 1px solid white; border-right: 1px solid black">
                        Telepon</th>
                     <td class="d-flex justify-content-between px-3" style="border-right: 1px solid">{{ $student->telp }}
                        </th>
                  </tr>
                  <tr>
                     <th scope="row" class="bg-primary text-white"
                        style="width:  20%; border-left: 1px solid; border-bottom: 1px solid white; border-right: 1px solid black;">
                        Jenis Kelamin</th>
                     <td class="d-flex justify-content-between px-3" style="border-right: 1px solid">
                        {{ $student->jenis_kelamin }}</td>
                  </tr>
                  <tr>
                     <th scope="row" class="bg-primary text-white"
                        style="width:  20%; border-left: 1px solid; border-bottom: 1px solid white; border-right: 1px solid black;">
                        Tempat Lahir</th>
                     <td class="d-flex justify-content-between px-3" style="border-right: 1px solid">
                        {{ $student->tempat_lahir }}</td>
                  </tr>
                  <tr>
                     <th scope="row" class="bg-primary text-white"
                        style="width:  20%; border-left: 1px solid; border-bottom: 1px solid white; border-right: 1px solid black;">
                        Tanggal Lahir</th>
                     <td class="d-flex justify-content-between px-3" style="border-right: 1px solid">
                        {{ $student->tanggal_lahir }}</td>
                  </tr>
                  <tr>
                     <th scope="row" class="bg-primary text-white"
                        style="width:  20%; border-left: 1px solid; border-bottom: 1px solid white; border-right: 1px solid black;">
                        Agama</th>
                     <td class="d-flex justify-content-between px-3" style="border-right: 1px solid">
                        {{ $student->religion->name }}</td>
                  </tr>
                  <tr>
                     <th scope="row" class="bg-primary text-white"
                        style="width:  20%; border-left: 1px solid; border-bottom: 1px solid white; border-right: 1px solid black;">
                        Jalur Pendaftaran
                     </th>
                     <td class="d-flex justify-content-between px-3" style="border-right: 1px solid">
                        {{ $student->regmethod->name }}
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>

         <div class="d-flex justify-content-end">
            <a href="/dashboard/students/" class="btn btn-primary mt-5 rounded text-white">Back to all</a>
         </div>
      </div>
   </div>

@endsection
