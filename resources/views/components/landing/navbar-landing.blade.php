    <div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
              <!--/ Top info end -->
              <!--/ Top social end -->
          </div>
          <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </div>
    <!--/ Topbar end -->

<!-- Header start -->
<header id="header" class="header-two">
  <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-light p-0">

                <div class="logo">
                    <a class="d-block" href="/">
                        <img loading="lazy" src="{{ asset('landingpages/assets/logo/pp2.png') }}" alt="PonPes">
                    </a>
                </div><!-- logo end -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav ml-auto align-items-center">

                      <li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a class="nav-link" href="/">
                        <i class="fa-solid fa-house-chimney fa-xl mr-2"></i>
                        Home</a>
                      </li>

                      <li class="nav-item {{ request()->is('biaya') ? 'active' : '' }}"><a class="nav-link" href="{{ route('biaya.index') }}">
                          <i class="fa-solid fa-comments-dollar fa-xl mr-2"></i>
                            Biaya</a></li>

                      <li class="nav-item {{ request()->is('profile') ? 'active' : '' }}"><a class="nav-link" href="{{ route('profile.index') }}">
                        <i class="fa-solid fa-circle-user fa-xl mr-2"></i>Profile</a></li>

                      <li class="header-get-a-quote">
                          <a class="btn btn-primary btn-sm" href="{{ route('masuk.index') }}"><i
                              class="fa-solid fa-right-to-bracket"></i>&nbsp;Login</a>
                      </li>
                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->
    </div>
    <!--/ Container end -->
  <!--/ Navigation end -->
</header>
<!--/ Header end -->
