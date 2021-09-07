<!-- Modal -->
<form action="/dashboard/students" method="post" enctype="multipart/form-data">
   @csrf

   <div class="modal fade text-left" id="ModalCreate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="ModalCreateLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="ModalCreateLabel">{{ __('Add Student') }}</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

               <div class="container-fluid">
                  <div class="row mt-2">
                     <div class="col-lg-12">
                        @csrf
                        <input type="hidden" name="role_id" value="1">
                        <div class="form-item row1 row">
                           <div class="mb-3 col-lg-12">
                              <label for="nama-lengkap" class="form-label">Nama Lengkap</label>
                              <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                 id=" nama-lengkap" placeholder="Nama Lengkap" name="nama" value="{{ old('nama') }}"
                                 required autofocus>
                              @error('nama')
                                 <div class="invalid-feedback">
                                    {{ $message }}
                                 </div>
                              @enderror
                           </div>
                        </div>

                        <div class="form-item row2 row">
                           <div class="mb-3 col-lg-6">
                              <label for="nomor-telepon" class="form-label">Nomor Telepon</label>
                              <input type="number" class="form-control @error('telp') is-invalid @enderror"
                                 id="nomor-telepon" placeholder="Nomor Telepon" name="telp" value="{{ old('telp') }}"
                                 required>
                              @error('telp')
                                 <div class="invalid-feedback">
                                    {{ $message }}
                                 </div>
                              @enderror
                           </div>

                           <div class="form-jenis-kelamin col-lg-6">
                              <div>
                                 <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                                 <select class="form-select jenis-kelamin @error('jenis_kelamin') is-invalid @enderror"
                                    id="jenisKelamin" aria-label="jenis kelamin" name="jenis_kelamin">
                                    <option selected disabled>Jenis Kelamin</option>
                                    <option value="Laki-laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                 </select>
                                 @error('jenis_kelamin')
                                    <div class="invalid-feedback">
                                       {{ $message }}
                                    </div>
                                 @enderror
                              </div>
                           </div>
                        </div>


                        <div class="form-item row3 row">
                           <div class="mb-3 col-lg-6">
                              <label for="tempat-lahir" class="form-label">Tempat Lahir</label>
                              <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror"
                                 id="tempat-lahir" placeholder="Tempat Lahir" name="tempat_lahir"
                                 value="{{ old('telp') }}" required>
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
                                 value="{{ old('telp') }}" required>
                              @error('tanggal_lahir')
                                 <div class="invalid-feedback">
                                    {{ $message }}
                                 </div>
                              @enderror
                           </div>
                        </div>


                        <div class="form-item row4 row">
                           <div class="form-agama col-lg-6">
                              <label for="agama" class="form-label">Agama</label>
                              <select class="form-select agama @error('agama') is-invalid @enderror" id="agama"
                                 aria-label="agama" name="religion_id">
                                 <option selected disabled>Agama</option>
                                 @foreach ($religions as $religion)
                                    <option value="{{ $religion->id }}">{{ $religion->name }}</option>
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
                                 id="jalurPendaftaran" aria-label="jalur pendaftaran" onchange="showForm()"
                                 name="regmethod_id">
                                 <option selected disabled>Jalur Pendaftaran</option>
                                 @foreach ($regmethods as $regmethod)
                                    <option value="{{ $regmethod->id }}">{{ $regmethod->name }}</option>

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


                        <div class="row6 row">
                           <div class="col-lg-12">
                              <!--maps belum-->
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
            </div> {{-- End of modal body --}}


            <div class="modal-footer">
               <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
               <div class="justify-content-end d-flex my-2">
                  <button type="submit" class="btn btn-primary">Submit</button>
               </div>
            </div>
         </div>
      </div>
   </div>


</form>
