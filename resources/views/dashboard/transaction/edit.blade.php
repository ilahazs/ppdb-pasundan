@extends('dashboard.layouts.master')
@section('container')


   <div class="container">
      <div class="row">
         <div class="col-lg-10 px-5 py-2">
            <div class="card">
               <div class="card-body">
                  <form action="{{ route('transaction.update', $student->id) }}" method="POST"
                     enctype="multipart/form-data">
                     @method('patch')
                     @csrf
                     <input type="hidden" name="role_id" value="1">
                     <input type="hidden" name="role_id" value="1">

                     <div class="form-item row1 row">
                        <div class="mb-3 col-lg-12">
                           <label for="nama-lengkap" class="form-label">Nama Lengkap</label>
                           <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama-lengkap"
                              placeholder="Nama Lengkap" name="nama" value="{{ $student->nama }}" required autofocus>
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
                           <input type="text" class="form-control @error('telp') is-invalid @enderror" id="nomor-telepon"
                              placeholder="Nomor Telepon" name="telp" value="{{ $student->telp }}" required>
                           @error('telp')
                              <div class="invalid-feedback">
                                 {{ $message }}
                              </div>
                           @enderror
                        </div>

                        <div class="form-jenis-kelamin col-lg-6">
                           <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                           <select class="form-select jenis-kelamin @error('jenis_kelamin') is-invalid @enderror"
                              id="jenisKelamin" aria-label="jenis kelamin" name="jenis_kelamin">
                              <option disabled>Jenis Kelamin</option>
                              <option value="Laki-laki" {{ $student->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>
                                 Laki - Laki
                              </option>
                              <option value="Perempuan" {{ $student->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>
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
                        <div class="form-agama col-lg-4">
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

                        <div class="form-agama col-lg-4">
                           <label for="status" class="form-label">Status</label>
                           <select class="form-select status @error('status') is-invalid @enderror" id="status"
                              aria-label="status" name="status_id">
                              <option disabled>Status</option>
                              @foreach ($statuses as $status)
                                 <option value="{{ $status->id }}"
                                    {{ $student->status_id === $status->id ? 'selected' : '' }}>
                                    {{ $status->name }}</option>
                              @endforeach

                              {{-- <option value="2">{{ __('Accepted') }}</option>
                              <option value="1">{{ __('Pending') }}</option>
                              <option value="3">{{ __('Rejected') }}</option> --}}
                           </select>
                           @error('status_id')
                              <div class="invalid-feedback">
                                 {{ $message }}
                              </div>
                           @enderror
                        </div>

                        <div class="form-agama col-lg-4">
                           <label for="class_id" class="form-label">Kelas</label>
                           <select class="form-select class_id @error('class_id') is-invalid @enderror" id="class_id"
                              aria-label="class_id" name="class_id">
                              <option disabled {{ $student->class_id == null ? 'selected' : '' }}>Kelas</option>
                              @foreach ($classes as $classes)
                                 <option value="{{ $classes->id }}"
                                    {{ $student->class_id === $classes->id ? 'selected' : '' }}>
                                    {{ $classes->name }}</option>
                              @endforeach
                           </select>
                           @error('class_id')
                              <div class="invalid-feedback">
                                 {{ $message }}
                              </div>
                           @enderror
                        </div>



                     </div>

                     <div class="form-item row5 row">
                        <div class="form-jalur-pendaftaran col-lg-12">
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


                     <div class="form-item row6 row my-3 visually-hidden" id="bukti">

                        <div class="mb-3 col-lg-12">
                           <label for="bukti" class="form-label">Bukti <span id="ket"></span></label>
                           <input type="file" class="form-control" id="bukti"
                              placeholder="Bukti penghargaan/prestasi atau surat rekomendasi RMP" name="bukti">
                        </div>

                     </div>


                     <div class="row6">
                        <!--maps belum-->
                     </div>

                     <div class="justify-content-end d-flex mt-5">
                        <button type="submit" class="btn btn-primary">Submit</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
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
         if (select.value != 1 && select.value != 0) {
            bukti.classList.remove('visually-hidden');
            if (select.value == 2) {
               ket.innerHTML = "Penghargaan atau Prestasi";
               $(bukti).attr("required", true);
            } else if (select.value == 3) {
               ket.innerHTML = "Surat Rekomendasi RMP"
               $(bukti).attr("required", true);
            }
         } else {
            bukti.classList.add('visually-hidden');
         }
      }
   </script>



@endsection
