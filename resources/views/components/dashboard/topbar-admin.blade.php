<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('admin.dashboard.index') }}" class="nav-link">Aplikasi PPDB Online PonPes Bahrul
                Maghfiroh</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-expanded="false">
                <span class="font-weight-bold">{{ Auth::user()->nama_lengkap }}</span>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('admin.my_profile.index') }}"><i
                        class="fas fa-user mr-3"></i>Profile</a>
                <a class="dropdown-item" href="#"
                    onclick="event.preventDefault(); document.getElementById('logout').submit()"><i
                        class="fas fa-arrow-circle-left mr-3"></i>Logout</a>

                <form action="{{ route('admin.logout') }}" method="POST" enctype="multipart/form-data" id="logout">
                    @csrf
                </form>

            </div>
        </li>
    </ul>
</nav>
