 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
       <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" data-enable-remember='true'
             data-no-transition-after-reload='true' href="#" role="button"><i class="fas fa-bars"></i></a>
       </li>
       <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ url('/dashboard') }}"
             class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">{{ __('Home') }}</a>
       </li>
       <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ route('students.index') }}"
             class="nav-link {{ Request::is('dashboard/students*') ? 'active' : '' }}">{{ __('Students') }}</a>
       </li>
       <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ route('transaction.index') }}"
             class="nav-link {{ Request::is('dashboard/transaction*') ? 'active' : '' }}">{{ __('Transaction') }}</a>
       </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

       <li class="nav-item dropdown pl-3">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
             data-bs-toggle="dropdown" aria-expanded="false">
             {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
             {{-- <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-sidebar-reverse"> </i>My
                   Dashboard</a>
             </li>
             <li>
                <hr class="dropdown-divider">
             </li> --}}
             <li>
                <form action="{{ route('logout') }}" method="POST">
                   @csrf
                   <button type="submit" class="dropdown-item">
                      <i class="bi bi-box-arrow-in-left"> </i>Logout
                   </button>
                </form>
             </li>

          </ul>
       </li>
    </ul>
 </nav>
 <!-- /.navbar -->
