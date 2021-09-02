<form action="/login" method="POST">
   @csrf
   <div class="modal fade text-left" id="ModalLogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="ModalLoginLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="ModalLoginLabel">{{ __('Login') }}</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
               <div class="row justify-content-center mt-5">
                  <div class="col-lg-4">

                     @if (session()->has('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                           {!! session('status') !!}
                           <button type="button" class="btn-close" data-bs-dismiss="alert"
                              aria-label="Close"></button>
                        </div>
                     @endif

                     @if (session()->has('statusError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                           {{ session('statusError') }}
                           <button type="button" class="btn-close" data-bs-dismiss="alert"
                              aria-label="Close"></button>
                        </div>
                     @endif

                     <main class="form-signin">
                        <h1 class="h3 mb-4 fw-normal text-center">Please login</h1>
                        {{-- <form action="/login" method="POST">
                        @csrf --}}
                        <div class="form-floating">
                           <input type="email"
                              class="form-control @error('email')
                                                                      is-invalid
                                          @enderror"
                              id="email" name="email" placeholder="name@example.com" required autofocus
                              value="{{ old('email') }}">
                           <label for="email">{{ __('Email address') }}</label>
                           @error('email')
                              <div class="invalid-feedback">{{ $message }}</div>
                           @enderror
                        </div>
                        <div class="form-floating mb-3">
                           <input type="password" class="form-control" id="password" name="password"
                              placeholder="Password" required>
                           <label for="password">{{ __('Password') }}</label>
                           @error('password')
                              <div class="invalid-feedback">{{ $message }}</div>
                           @enderror
                        </div>

                        {{-- <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button> --}}
                        <small class="my-4 d-block text-center">{{ __('Not registered? ') }}<a href="/register"
                              class="text-decoration-none">{{ __('Register Here!') }}</a></small>
                     </main>
                  </div>
               </div>
            </div>

            <div class="modal-footer">
               <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
               <div class="justify-content-end d-flex my-2">
                  <button type="submit" class="btn btn-primary">Login</button>
               </div>
            </div>

         </div>
      </div>
   </div>

</form>
