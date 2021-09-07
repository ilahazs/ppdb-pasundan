<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 control-sidebar-dark" data-controlsidebar-slide="false">
   <!-- Brand Logo -->
   <a href="assets/index3.html" class="brand-link text-decoration-none">
      <span class="brand-text font-weight-light ml-0">{{ config('app.name') }}</span>
      <img src="{{ asset('img/logo.png') }}" alt="{{ config('app.name') . __(' Logo') }}"
         class="brand-image img-circle elevation-1">
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         <div class="image">
            <img src="{{ Avatar::create(auth()->user()->name)->toBase64() }}" class="img-circle elevation-1"
               alt="User Image" width="150px" height="150px">
         </div>
         <div class="info">
            <a href="#" class="d-block text-decoration-none">{{ auth()->user()->name }}</a>
         </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
         <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
               <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
               </button>
            </div>
         </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
            <li class="nav-item">
               <a href="{{ route('dashboard') }}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-meteor"></i>
                  <p>
                     Dashboard
                  </p>
               </a>
            </li>
            <li class="nav-item">

               <a href="{{ route('students.index') }}"
                  class="nav-link {{ Request::is('dashboard/students*') ? 'active' : '' }}">
                  <i class="                nav-icon fas fa-person-booth"></i>
                  <p>
                     Students
                     {{-- <span class="right badge badge-danger">!</span> --}}
                  </p>
               </a>
            </li>
            <li class="nav-header">Operation</li>
            <li class="nav-item">
               <a href="{{ route('transaction.index') }}"
                  class="nav-link {{ Request::is('dashboard/transaction*') ? 'active' : '' }}">
                  <i class="nav-icon far fa-calendar-alt"></i>
                  <p>
                     Transaction
                  </p>
               </a>
            </li>

            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                     Mapping
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="{{ route('map.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Class</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('map.ajaran') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Ajaran</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('map.mapel') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Mapel</p>
                     </a>
                  </li>
               </ul>
            </li>
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
</aside>
