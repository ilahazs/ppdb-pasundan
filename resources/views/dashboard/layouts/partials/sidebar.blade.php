<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="assets/index3.html" class="brand-link">
      {{-- <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8"> --}}
      <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         <div class="image">
            <img src="{{ asset('img/profile.png') }}" class="img-circle elevation-1" alt="User Image" width="150px"
               height="150px">
         </div>
         <div class="info">
            <a href="#" class="d-block">{{ auth()->user()->name }}</a>
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
               <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-meteor"></i>
                  <p>
                     Dashboard
                     <span class="right badge badge-info">!</span>
                  </p>
               </a>
            </li>
            <li class="nav-item">

               <a href="dashboard/students" class="nav-link {{ Request::is('dashboard/students*') ? 'active' : '' }}"">
                  <i class=" nav-icon fas fa-person-booth"></i>
                  <p>
                     Students
                     <span class="right badge badge-danger">!</span>
                  </p>
               </a>
            </li>
            <li class="nav-header">EXAMPLES</li>
            <li class="nav-item">
               <a href="../calendar.html" class="nav-link">
                  <i class="nav-icon far fa-calendar-alt"></i>
                  <p>
                     Calendar
                     <span class="badge badge-info right">2</span>
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="../gallery.html" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                     Gallery
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                     Pages
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="../examples/invoice.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Invoice</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="../examples/profile.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Profile</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="../examples/e-commerce.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>E-commerce</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="../examples/projects.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Projects</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="../examples/project-add.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Project Add</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="../examples/project-edit.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Project Edit</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="../examples/project-detail.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Project Detail</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="../examples/contacts.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Contacts</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="../examples/faq.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>FAQ</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="../examples/contact-us.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Contact us</p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-search"></i>
                  <p>
                     Search
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="../search/simple.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Simple Search</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="../search/enhanced.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Enhanced</p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-header">MISCELLANEOUS</li>
            <li class="nav-item">
               <a href="assets/iframe.html" class="nav-link">
                  <i class="nav-icon fas fa-ellipsis-h"></i>
                  <p>Tabbed IFrame Plugin</p>
               </a>
            </li>
            <li class="nav-header">LABELS</li>
            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p class="text">Important</p>
               </a>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Warning</p>
               </a>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Informational</p>
               </a>
            </li>
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
</aside>
