@extends('dashboard.layouts.master')
@section('container')


   <div class="container-fluid">
      {{-- <div class="header">
         <h4>{{ __('Add New Student') }}</h4>
      </div> --}}
      <!-- form group -->
      <div class="form">


         <div class="form-item row1">
            <div class="mb-3">
               <label for="nama-lengkap" class="form-label">Nama Lengkap</label>
               <input type="text" class="form-control" id="nama-lengkap" placeholder="Nama Lengkap">
            </div>
         </div>


         <div class="form-item row2">

            <div class="mb-3">
               <label for="nomor-telepon" class="form-label">Nomor Telepon</label>
               <input type="number" class="form-control" id="nomor-telepon" placeholder="Nomor Telepon">
            </div>

            <div class="form-jenis-kelamin">
               <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
               <select class="form-select jenis-kelamin" id="jenisKelamin" aria-label="jenis kelamin">
                  <option selected>Jenis Kelamin</option>
                  <option value="L">Laki - Laki</option>
                  <option value="P">Perempuan</option>
               </select>
            </div>

         </div>


         <div class="form-item row3">

            <div class="mb-3">
               <label for="tempat-lahir" class="form-label">Tempat Lahir</label>
               <input type="text" class="form-control" id="tempat-lahir" placeholder="Tempat Lahir">
            </div>

            <div class="mb-3">
               <label for="tanggal-lahir" class="form-label">Tanggal Lahir</label>
               <input type="date" class="form-control" id="tanggal-lahir" placeholder="Tanggal Lahir">
            </div>

         </div>


         <div class="form-item row4">

            <div class="form-agama">
               <label for="agama" class="form-label">Agama</label>
               <select class="form-select agama" id="agama" aria-label="agama">
                  <option selected>Jenis Kelamin</option>
                  <option value="islam">Islam</option>
                  <option value="katholik">Katholik</option>
                  <option value="protestan">Protestan</option>
                  <option value="hindu">Hindu</option>
                  <option value="budha">Budha</option>
               </select>
            </div>

            <div class="form-jalur-pendaftaran">
               <label for="jalurPendaftaran" class="form-label">Jalur Pendaftaran</label>
               <select class="form-select jalur-pendaftaran" id="jalurPendaftaran" aria-label="jalur pendaftaran"
                  onchange="showForm()">
                  <option selected value="0">Jalur Pendaftaran</option>
                  <option value="umum">Umum</option>
                  <option value="prestasi">Prestasi</option>
                  <option value="rmp">RMP</option>
               </select>
            </div>

         </div>


         <div class="form-item row5 visually-hidden" id="bukti">

            <div class="mb-3">
               <label for="bukti" class="form-label">Bukti <span id="ket"></span></label>
               <input type="file" class="form-control" id="bukti"
                  placeholder="Bukti penghargaan/prestasi atau surat rekomendasi RMP">
            </div>

         </div>


         <div class="row6">
            <!--maps belum-->
         </div>


      </div>


   </div>

   <script>
      // show or hide form bukti script
      function showForm() {
         const select = document.getElementById('jalurPendaftaran');
         const bukti = document.getElementById('bukti');
         const ket = document.getElementById('ket');
         console.log(select.value);
         if (select.value != "umum" && select.value != 0) {
            bukti.classList.remove('visually-hidden');
            if (select.value == "prestasi") {
               ket.innerHTML = "Penghargaan atau Prestasi"
            } else if (select.value == "rmp") {
               ket.innerHTML = "Surat Rekomendasi RMP"
            }
         } else {
            bukti.classList.add('visually-hidden');
         }
      }
   </script>


@endsection
