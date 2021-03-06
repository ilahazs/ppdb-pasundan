<!-- Modal -->
<form action="/dashboard/students/{{ $student->id }}" method="post" enctype="multipart/form-data">
   @method('patch')
   @csrf

   <div class="modal modal-edit fade text-left" id="ModalEdit{{ $student->id }}" data-bs-backdrop="static"
      data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalEdit{{ $student->id }}Label" aria-hidden="true">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="ModalEdit{{ $student->id }}Label">{{ __('Edit Student') }}</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-lg-12">
                        @csrf
                        <input type="hidden" name="role_id" value="1">

                        <div class="form-item row1 row">
                           <div class="mb-3 col-lg-12">
                              <label for="nama-lengkap" class="form-label">Nama Lengkap</label>
                              <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                 id=" nama-lengkap" placeholder="Nama Lengkap" name="nama"
                                 value="{{ $student->nama }}" required autofocus>
                              @error('nama')
                                 <div class="invalid-feedback">
                                    {{ $message }}
                                 </div>
                              @enderror
                           </div>
                        </div>

                        <div class="form-item row2 row">
                           <div class="col-lg-6 mb-3">
                              <label for="nomor-telepon" class="form-label">Nomor Telepon</label>
                              <input type="number" class="form-control @error('telp') is-invalid @enderror"
                                 id="nomor-telepon" placeholder="Nomor Telepon" name="telp"
                                 value="{{ $student->telp }}" required>
                              @error('telp')
                                 <div class="invalid-feedback">
                                    {{ $message }}
                                 </div>
                                 <script>
                                    $(this).modal('show');
                                 </script>
                              @enderror
                           </div>

                           <div class="form-jenis-kelamin col-lg-6">
                              <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                              <select class="form-select jenis-kelamin @error('jenis_kelamin') is-invalid @enderror"
                                 id="jenisKelamin" aria-label="jenis kelamin" name="jenis_kelamin">
                                 <option disabled>Jenis Kelamin</option>
                                 <option value="Laki-laki"
                                    {{ $student->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>
                                    Laki - Laki
                                 </option>
                                 <option value="Perempuan"
                                    {{ $student->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>
                                    Perempuan
                                 </option>
                              </select>
                              @error('jenis_kelamin')
                                 <div class="invalid-feedback">
                                    {{ $message }}
                                 </div>
                              @enderror
                           </div>
                        </div>


                        <div class="form-item row3 row">
                           <div class="mb-3 col-lg-6">
                              <label for="tempat-lahir" class="form-label">Tempat Lahir</label>
                              <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror"
                                 id="tempat-lahir" placeholder="Tempat Lahir" name="tempat_lahir"
                                 value="{{ $student->tempat_lahir }}" required>
                              @error('tempat_lahir')
                                 <div class="invalid-feedback">
                                    {{ $message }}
                                 </div>
                              @enderror
                           </div>

                           <div class="col-lg-6">
                              <label for="tanggal-lahir" class="form-label">Tanggal Lahir</label>
                              <input type="date" class="form-control @error('tempat_lahir') is-invalid @enderror"
                                 id="tanggal-lahir" placeholder="Tanggal Lahir" name="tanggal_lahir"
                                 value="{{ $student->tanggal_lahir }}" required>
                              @error('tanggal_lahir')
                                 <div class="invalid-feedback">
                                    {{ $message }}
                                 </div>
                              @enderror
                           </div>
                        </div>


                        <div class="form-item row4 row">
                           <div class="form-agama col-lg-6">
                              <label for="religion_id" class="form-label">Agama</label>
                              <select class="form-select religion_id @error('religion_id') is-invalid @enderror"
                                 id="religion_id" aria-label="religion_id" name="religion_id">
                                 <option disabled>Agama</option>
                                 @foreach ($religions as $religion)
                                    <option value="{{ $religion->id }}"
                                       {{ $student->religion_id === $religion->id ? 'selected' : '' }}>
                                       {{ $religion->name }}</option>
                                 @endforeach
                              </select>
                              @error('religion_id')
                                 <div class="invalid-feedback">
                                    {{ $message }}
                                 </div>
                              @enderror
                           </div>

                           <div class="form-jalur-pendaftaran col-lg-6">
                              <label for="jalurPendaftaran" class="form-label">Jalur Pendaftaran</label>
                              <select class="form-select jalur-pendaftaran @error('regmethod_id') is-invalid @enderror"
                                 id="jalurPendaftaran" aria-label="jalur-pendaftaran" onchange="showForm()"
                                 name="regmethod_id">
                                 <option disabled>Jalur Pendaftaran</option>
                                 @foreach ($regmethods as $regmethod)
                                    <option value="{{ $regmethod->id }}"
                                       {{ $student->regmethod_id === $regmethod->id ? 'selected' : '' }}>
                                       {{ $regmethod->name }}
                                    </option>

                                 @endforeach
                              </select>
                              @error('regmethod_id')
                                 <div class="invalid-feedback">
                                    {{ $message }}
                                 </div>
                              @enderror
                           </div>

                        </div>


                        <div class="form-item row5 visually-hidden" id="bukti">

                           <div class="mb-3 col-lg-12">
                              <label for="bukti" class="form-label">Bukti <span id="ket"></span></label>
                              <input type="file" class="form-control" id="bukti"
                                 placeholder="Bukti penghargaan/prestasi atau surat rekomendasi RMP" name="bukti">
                           </div>

                        </div>


                        <div class="row6">
                           <!--maps belum-->
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="modal-footer">
               <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
               {{-- <button type="button" class="btn btn-primary">Understood</button> --}}
               <div class="justify-content-end d-flex my-2">
                  <button type="submit" class="btn btn-primary">Submit</button>
               </div>

            </div>
         </div>
      </div>

      @if (Session::has('errors'))
         <script type="text/javascript">
            $(document).ready(function() {
               $('.modal-edit').modal({
                  show: true
               });
            });
            // $(document).ready(function()$('#modal').modal('show');            
         </script>
      @endif




   </div>



</form>
