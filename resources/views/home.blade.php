@extends('layouts.main')
@section('container')
   <h1>Halaman Home</h1>
   <hr>
   @if (session()->has('successLogout'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
         {{ session('successLogout') }}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
   @endif
   <article class="mb-5">
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium quo odio assumenda vitae repudiandae labore
         laboriosam sunt temporibus quaerat voluptatem fuga, vero animi, sequi ducimus eos facilis amet debitis corrupti
         ratione! Amet molestias tenetur quae ipsam sit eos, nostrum beatae porro minima harum, tempora earum libero magnam
         odio error corrupti doloribus esse eum accusamus dolorum consectetur at? Est inventore eum, earum veritatis
         ratione
         aperiam eius obcaecati pariatur tenetur, tempora saepe quaerat vero sequi voluptatem magnam quam perspiciatis,
         perferendis quia laudantium expedita reprehenderit quos. Veritatis quas magnam sunt asperiores laboriosam dolorum.
         Voluptate ab nisi dolorum quam porro, quos, dolores beatae odit cumque amet tempora sit facere, rem ullam deserunt
         maiores. At rem iure, incidunt asperiores tempore sapiente eos dolorum quia quibusdam numquam earum optio, labore
         obcaecati expedita in omnis commodi saepe excepturi. Temporibus quibusdam odio dolore sapiente autem quas, facilis
         pariatur hic totam doloremque molestiae consectetur adipisci ut. Laborum, blanditiis sapiente!</p>

      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis laborum id natus blanditiis excepturi rerum
         nihil temporibus. Nulla vel quaerat tempora quis, magnam tenetur nobis excepturi totam delectus reprehenderit
         temporibus nisi, numquam similique, fugit atque dolorem. Magni nulla voluptatem perspiciatis commodi. Omnis dicta,
         eos nisi tenetur numquam eius, velit, distinctio eum cumque vitae repellendus labore ea nostrum! Debitis
         architecto
         ea molestiae suscipit? Minima perspiciatis ab ducimus aliquid voluptatibus accusamus sapiente vel odit, fugiat
         nihil
         praesentium iste dolore consequuntur quasi voluptates beatae eum saepe iusto recusandae omnis sunt eligendi
         laboriosam? Blanditiis sint voluptatem vitae odio delectus ullam doloribus expedita dicta eligendi.</p>

      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae, aspernatur dolores. Hic sit magnam unde odio
         quidem quos, quod quam qui voluptates consequatur facilis maxime ratione quasi nostrum provident, cupiditate ipsum
         sed? Reprehenderit, est ad aperiam odio corrupti, voluptas voluptates consectetur mollitia similique quaerat
         voluptatibus commodi non maiores! Exercitationem consectetur, qui dolorem architecto itaque ullam fugiat aliquid.
         Quam, officiis dolores in dolorum debitis quis natus? Expedita labore quo sit accusantium velit voluptatibus neque
         ipsam placeat. Molestiae fugiat repellat a cupiditate modi sed rerum odit at, libero sapiente illum animi
         molestias
         reiciendis aspernatur voluptates enim repellendus dolores distinctio dolorem vel neque architecto qui quis
         maiores.
         sunt placeat dicta architecto obcaecati enim provident, dolore error! Accusamus laborum necessitatibus, quae
         assumenda dolore illum provident asperiores illo iure eos non nulla id perferendis, sunt voluptatem ipsam!</p>
   </article>
@endsection
