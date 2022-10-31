  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ route('santri.dashboard.index') }}" class="brand-link">
          <img src="{{ asset('landingpages/assets/logo/logo.png') }}" alt="Logo"
              class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">PPDB ONLINE</span>
      </a>

      <!-- Sidebar -->

      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  @if (Auth::user()->foto_profile != null)
                      <img src="{{ Storage::url(Auth::user()->foto_profile) }}" class="img-circle elevation-2"
                          alt="User Image">
                  @else
                      <img src="{{ asset('dashboard/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                          alt="User Image">
                  @endif
              </div>
              <div class="info">
                  <a href="#" class="d-block">{{ Auth::user()->nama_lengkap }}</a>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <li class="nav-item">
                      <a href="{{ route('santri.dashboard.index') }}"
                          class="nav-link {{ request()->is('santri/dashboard') || request()->is('santri/dashboard/*') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="{{ route('santri.biodata.index') }}"
                          class="nav-link {{ request()->is('santri/biodata') || request()->is('santri/biodata/*') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-sticky-note"></i>
                          <p>
                              Lengkapi Biodata
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="{{ route('santri.pengumuman.index') }}"
                          class="nav-link {{ request()->is('santri/pengumuman') || request()->is('santri/pengumuman/*') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-bullhorn"></i>
                          <p>
                              Pengumuman
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="{{ route('santri.biodata.santri') }}"
                          class="nav-link {{ request()->is('santri/biodata_santri') || request()->is('santri/biodata_santri/*') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-users"></i>
                          <p>
                              Biodata
                          </p>
                      </a>
                  </li>

                  @php
                      if($alamat != null && $asal_sekolah != null && $orangtua != null && $info != null){
                  @endphp

                    <li class="nav-item">
                        <a href="{{ route('santri.cetak_biodata.show', Auth::user()->id ) }}"
                            class="nav-link">
                            <i class="nav-icon fas fa-print"></i>
                            <p>
                                Cetak Biodata
                            </p>
                        </a>
                    </li>

                  @php
                    }
                  @endphp

          </nav>
          <!-- /.sidebar-menu -->
      </div>

      <!-- /.sidebar -->


  </aside>
