@extends('layouts.main')

@section('container')
   <h1>Halaman About</h1>
   <hr>
   <h3>{{ $name }}</h3>
   <p>{{ $email }}</p>
   <img src="{{ asset('img/' . $image) }}" alt="{{ $name }}" class="img-thumbnail rounded-circle" width="200px"
      height="200px">
@endsection
