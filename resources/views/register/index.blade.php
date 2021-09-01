@extends('layouts/main')

@section('container')
   <div class="row justify-content-center mt-5">
      <div class="col-lg-5">
         <main class="form-registration">
            <h1 class="h3 mb-4 fw-normal text-center">Register</h1>
            <form method="POST" action="/register">
               @csrf
               {{-- <img class="mb-4 text-center" src="{{ asset('img/slack.png  ') }}" alt="logo" width="72"
                height="77"> --}}
               <div class="form-floating">
                  <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" id="name"
                     name="name" placeholder="Name" required value="{{ old('name') }}">
                  <label for="name">Name</label>
                  @error('name')
                     <div class="invalid-feedback">
                        {{ $message }}
                     </div>
                  @enderror
               </div>
               <div class="form-floating">
                  <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                     name="username" placeholder="username" required value="{{ old('username') }}">
                  <label for="username">Username</label>
                  @error('username')
                     <div class="invalid-feedback">
                        {{ $message }}
                     </div>
                  @enderror
               </div>
               <div class="form-floating">
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                     placeholder="name@example.com" required value="{{ old('email') }}">
                  <label for="email">Email address</label>
                  @error('email')
                     <div class="invalid-feedback">
                        {{ $message }}
                     </div>
                  @enderror
               </div>
               <div class="form-floating">
                  <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror"
                     id="password" name="password" placeholder="Password" required>
                  <label for="password">Password</label>
                  @error('password')
                     <div class="invalid-feedback">
                        {{ $message }}
                     </div>
                  @enderror
               </div>

               <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
            </form>
            <small class="my-4 d-block text-center">Already registered? <a href="/login" class="text-decoration-none">Login
                  Here!</a></small>
         </main>
      </div>
   </div>
@endsection
