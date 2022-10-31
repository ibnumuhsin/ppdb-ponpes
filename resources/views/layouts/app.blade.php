<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title') | PPDB PonTren Bahrul Maghfiroh</title>


    @stack('before-style')

        @include('includes.dashboard.styles')

    @stack('after-style')


</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper">

  {{-- <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="# alt="Admin" height="60" width="60">
  </div> --}}

  <!-- Navbar -->

    <x-TopbarAdmin></x-TopbarAdmin>

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->


        <x-SidebarAdmin></x-SidebarAdmin>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    @include('sweetalert::alert')


    @yield('content')



  </div>
  <!-- /.content-wrapper -->

    <x-FooterDashboard></x-FooterDashboard>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

    @stack('before-script')

        @include('includes.dashboard.scripts')

    @stack('after-script')

</body>
</html>
