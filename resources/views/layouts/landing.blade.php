<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">

  <title>@yield('title') | PPDB I PonTren Bahrul Maghfiroh</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="{{ asset('./langingpages/assets/logo/logo.png') }}">

  <!-- CSS
================================================== -->
    @stack('before-style')

        @include('includes.landing.styles')

    @stack('after-style')

</head>
<body>
  <div class="body-inner">

    <x-NavbarLanding></x-NavbarLanding>


    @include('sweetalert::alert')

    @yield('content')



    <x-FooterLanding></x-FooterLanding>

  <!-- Footer end -->


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->

    @stack('before-script')

        @include('includes.landing.scripts')

    @stack('after-script')

  </div><!-- Body inner end -->
  </body>

  </html>
