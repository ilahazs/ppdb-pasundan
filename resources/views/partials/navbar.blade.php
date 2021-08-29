<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <div class="container">
      <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
         aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav">
            <li class="nav-item">
               {{-- secara otomatis data yg dikirim dari routing ke masing2 views, karena mereka juga --}}
               {{-- include views main dan views main juga nge-summon partials navbar maka data $title --}}
               {{-- juga akan exist di file ini --}}
               <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About</a>
            </li>
         </ul>

         <ul class="navbar-nav ms-auto">
            @auth
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle {{ Request::is('/') ? 'active' : '' }}" href="#"
                     id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Welcome back! {{ auth()->user()->name }}
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark">
                     <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-sidebar-reverse"> </i>My
                           Dashboard</a>
                     </li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>
                     <li>
                        <form action="/logout" method="POST">
                           @csrf
                           <button type="submit" class="dropdown-item">
                              <i class="bi bi-box-arrow-in-left"> </i>Logout
                           </button>
                        </form>
                     </li>

                  </ul>
               </li>

            @else
               <li class="nav-item">
                  <a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="/login"><i
                        class="bi bi-box-arrow-in-right"></i> Login</a>
               </li>
            @endauth
         </ul>

      </div>
   </div>
</nav>
