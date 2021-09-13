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
                              {{ $student->telp }}
                              <br>Status:
                              {{-- <span
                                 class="{{ $student->status->name == 'Accepted' ? 'text-success' : 'text-primary' }}">{{ $student->status->name }}
                              </span> --}}
                              <span
                                 class="@if ($student->status->name == 'Accepted')
                                 text-success
                              @elseif ($student->status->name == 'Pending')
                                 text-primary
                              @else
                                 text-danger
                              @endif">{{ $student->status->name }}</span>

                              <br>Agama:
                              {{ $student->religion->name }} <br>
                              Jalur: {{ $student->regmethod->name }} <br>TTL: {{ $student->tempat_lahir }},
                              {{ $student->tanggal_lahir }} <br>
                           </p>
                           <p class="card-text"><small
                                 class="text-muted">{{ $student->created_at->diffForHumans() }}</small></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
