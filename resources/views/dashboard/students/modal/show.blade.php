<!-- Modal -->

<div class="modal fade text-left" id="ModalShow{{ $student->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
   tabindex="-1" aria-labelledby="ModalShow{{ $student->id }}Label" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="ModalShow{{ $student->id }}Label">{{ __('Student Detail') }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            {{-- <div class="card">
               <ul class="list-group list-group-flush">
                  <li class="list-group-item">{{ $student->nama }}</li>
                  <li class="list-group-item">{{ $student->telp }}</li>
                  <li class="list-group-item">{{ $student->jenis_kelamin }}</li>
                  <li class="list-group-item">{{ $student->tempat_lahir }}</li>
                  <li class="list-group-item">{{ $student->tanggal_lahir }}</li>
                  <li class="list-group-item">{{ $student->religion->name }}</li>
                  <li class="list-group-item">{{ $student->path->name }}</li>
               </ul>
               <div class="card-footer">
                  Card footer
               </div>
            </div> --}}
            <div class="card mb-3">
               <div class="row">
                  <div class="col-md-3">
                     <img src="{{ asset('img/profile.png') }}" class="rounded-circle py-3 mx-5" alt="..."
                        width="150px">
                  </div>
                  <div class="col-md-9">
                     <div class="card-body mx-5">
                        <h3 class="card-title">{{ $student->nama }}</h4>
                           <p class="card-text">Gender: {{ $student->jenis_kelamin }}<br>No. telp:
                              {{ $student->telp }} <br>Agama: {{ $student->religion->name }} <br>
                              Jalur: {{ $student->path->name }} <br>TTL: {{ $student->tempat_lahir }},
                              {{ $student->tanggal_lahir }} <br></p>
                           <p class="card-text"><small
                                 class="text-muted">{{ $student->created_at->diffForHumans() }}</small></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
         </div>
      </div>
   </div>
</div>
