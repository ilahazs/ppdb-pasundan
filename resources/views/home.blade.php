@extends('layouts.main')
@section('container')
   <h1>Halaman Home</h1>
   <hr>
   @if (session()->has('status'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
         {!! session('status') !!}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
   @endif
   <article class="mb-5">
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium quo odio assumenda vitae repudiandae labore
         laboriosam sunt temporibus quaerat voluptatem fuga, vero animi, sequi ducimus eos facilis amet debitis corrupti
         ratione! Amet molestiaomnis commodi saepe excepturi. Temporibus quibusdam odio dolore sapiente autem quas, facilis
         pariatur hic totam doloremque molestiae consectetur adipisci ut. Laborum, blanditiis sapiente!</p>

      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis laborum id natus blanditiis excepturi rerum
         nihil temporibus. Nulla vel quaerat tempora quis, magnam tenetur nobis excepturi totam delectus reprehenderit
         temporibus nisi, numqua consequuntur quasi voluptates beatae eum saepe iusto recusandae omnis sunt eligendi
         laboriosam? Blanditiis sint voluptatem vitae odio delectus ullam doloribus expedita dicta eligendi.</p>

      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae, aspernatur dolores. Hic sit magnam unde odio
         quidem quos, quod quam qui voluptates consequatur facilis maxime ratione quasi nostrum provident, cupiditate ipsum
         sed? Reprehenderit, estoluptates enim repellendus dolores distinctio dolorem vel neque architecto qui quis
         maiores.
         sunt placeat dicta architecto obcaecati enim provident, dolore error! Accusamus laborum necessitatibus, quae
         assumenda dolore illum provident asperiores illo iure eos non nulla id perferendis, sunt voluptatem ipsam!</p>
   </article>
@endsection
