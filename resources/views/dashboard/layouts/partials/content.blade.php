<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>{{ $detailtitle ?? $title }}</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a
                        class="text-decoration-none {{ Request::is(Request::path()) ? 'text-secondary' : '' }}"
                        {{-- Request::path = dashboard, Request::url = x.test/dashboard --}} href="#">{{ $title }}</a></li>

                  <li class="breadcrumb-item"><a class="text-decoration-none"
                        href="{{ $prevlink ?? '/dashboard/students' }}">{{ $prevpage ?? 'Students' }}</a></li>
               </ol>
            </div>
         </div>
      </div>
   </section>
