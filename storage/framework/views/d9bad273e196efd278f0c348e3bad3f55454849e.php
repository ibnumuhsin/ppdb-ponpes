  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?php echo e(route('admin.dashboard.index')); ?>" class="brand-link">
          <img src="<?php echo e(asset('landingpages/assets/logo/logo.png')); ?>" alt="Logo"
              class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">PPDB ONLINE</span>
      </a>

      <!-- Sidebar -->

      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <?php if(Auth::user()->foto_profile != null): ?>
                      <img src="<?php echo e(Storage::url(Auth::user()->foto_profile)); ?>" class="img-circle elevation-2"
                          alt="User Image">
                  <?php else: ?>
                      <img src="<?php echo e(asset('dashboard/dist/img/user2-160x160.jpg')); ?>" class="img-circle elevation-2"
                          alt="User Image">
                  <?php endif; ?>
              </div>
              <div class="info">
                  <a href="#" class="d-block"><?php echo e(Auth::user()->nama_lengkap); ?></a>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <li class="nav-item">
                      <a href="<?php echo e(route('admin.dashboard.index')); ?>"
                          class="nav-link <?php echo e(request()->is('admin/dashboard') || request()->is('admin/dashboard/*') ? 'active' : ''); ?>">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="<?php echo e(route('admin.verifikasi.index')); ?>"
                          class="nav-link <?php echo e(request()->is('admin/verifikasi') || request()->is('admin/verifikasi/*') ? 'active' : ''); ?>">
                          <i class="nav-icon fa fa-check"></i>
                          <p>
                              Verifikasi
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="<?php echo e(route('admin.kelulusan.index')); ?>"
                          class="nav-link <?php echo e(request()->is('admin/kelulusan') || request()->is('admin/kelulusan/*') ? 'active' : ''); ?>">
                          <i class="nav-icon fa fa-graduation-cap"></i>
                          <p>
                              Kelulusan
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="<?php echo e(route('admin.bukti_kelulusan.index')); ?>"
                          class="nav-link <?php echo e(request()->is('admin/bukti_kelulusan') || request()->is('admin/bukti_kelulusan/*') ? 'active' : ''); ?>">
                          <i class="nav-icon fas fa-scroll"></i>
                          <p>
                              Bukti Kelulusan
                          </p>
                      </a>
                  </li>


                  <li
                      class="nav-item <?php echo e(request()->is('admin/siswa') ||
                      request()->is('admin/siswa/*') ||
                      request()->is('admin/admin') ||
                      request()->is('admin/asmin/*')
                          ? 'menu-open'
                          : ''); ?>">
                      <a href="#"
                          class="nav-link <?php echo e(request()->is('admin/siswa') ||
                          request()->is('admin/siswa/*') ||
                          request()->is('admin/admin') ||
                          request()->is('admin/asmin/*')
                              ? 'active'
                              : ''); ?>">
                          <i class="nav-icon fa fa-users"></i>
                          <p>
                              Users
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="<?php echo e(route('admin.siswa.index')); ?>"
                                  class="nav-link <?php echo e(request()->is('admin/siswa') || request()->is('admin/siswa/*') ? 'active' : ''); ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Siswa/i</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?php echo e(route('admin.admin.index')); ?>"
                                  class="nav-link <?php echo e(request()->is('admin/admin') || request()->is('admin/admin/*') ? 'active' : ''); ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Administrator</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li
                      class="nav-item
            <?php echo e(request()->is('admin/alur') ||
            request()->is('admin/alur/*') ||
            request()->is('admin/syarat_daftar') ||
            request()->is('admin/syarat_daftar/*') ||
            request()->is('admin/biaya_pendidikan') ||
            request()->is('admin/biaya_pendidikan/*') ||
            request()->is('admin/biografi_pendiri') ||
            request()->is('admin/biografi_pendiri/*') ||
            request()->is('admin/visi_misi') ||
            request()->is('admin/visi_misi/*') ||
            request()->is('admin/fasilitas') ||
            request()->is('admin/fasilitas/*') ||
            request()->is('admin/extra_kulikuler') ||
            request()->is('admin/extra_kulikuler/*') ||
            request()->is('admin/brosur') ||
            request()->is('admin/brosur/*')
                ? 'menu-open'
                : ''); ?>">
                      <a href="#"
                          class="nav-link <?php echo e(request()->is('admin/alur') ||
                          request()->is('admin/alur/*') ||
                          request()->is('admin/syarat_daftar') ||
                          request()->is('admin/syarat_daftar/*') ||
                          request()->is('admin/biaya_pendidikan') ||
                          request()->is('admin/biaya_pendidikan/*') ||
                          request()->is('admin/biografi_pendiri') ||
                          request()->is('admin/biografi_pendiri/*') ||
                          request()->is('admin/visi_misi') ||
                          request()->is('admin/visi_misi/*') ||
                          request()->is('admin/fasilitas') ||
                          request()->is('admin/fasilitas/*') ||
                          request()->is('admin/extra_kulikuler') ||
                          request()->is('admin/extra_kulikuler/*') ||
                          request()->is('admin/brosur') ||
                          request()->is('admin/brosur/*')
                              ? 'active'
                              : ''); ?>">
                          <i class="nav-icon fa fa-cogs"></i>
                          <p>
                              Pengaturan Website
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="<?php echo e(route('admin.alur.index')); ?>"
                                  class="nav-link  <?php echo e(request()->is('admin/alur') || request()->is('admin/alur/*') ? 'active' : ''); ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Alur Pendaftaran</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?php echo e(route('admin.syarat_daftar.index')); ?>"
                                  class="nav-link <?php echo e(request()->is('admin/syarat_daftar') || request()->is('admin/syarat_daftar/*') ? 'active' : ''); ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Syarat Pendaftaran</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?php echo e(route('admin.biaya_pendidikan.index')); ?>"
                                  class="nav-link <?php echo e(request()->is('admin/biaya_pendidikan') || request()->is('admin/biaya_pendidikan/*') ? 'active' : ''); ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Biaya Pendidikan</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?php echo e(route('admin.biografi_pendiri.index')); ?>"
                                  class="nav-link <?php echo e(request()->is('admin/biografi_pendiri') || request()->is('admin/biografi_pendiri/*') ? 'active' : ''); ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Biografi Pendiri</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?php echo e(route('admin.visi_misi.index')); ?>"
                                  class="nav-link <?php echo e(request()->is('admin/visi_misi') || request()->is('admin/visi_misi/*') ? 'active' : ''); ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Visi & Misi</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?php echo e(route('admin.fasilitas.index')); ?>"
                                  class="nav-link <?php echo e(request()->is('admin/fasilitas') || request()->is('admin/fasilitas/*') ? 'active' : ''); ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Fasilitas Pesantren</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?php echo e(route('admin.extra_kulikuler.index')); ?>"
                                  class="nav-link <?php echo e(request()->is('admin/extra_kulikuler') || request()->is('admin/extra_kulikuler/*') ? 'active' : ''); ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Extra Kulikuler</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?php echo e(route('admin.brosur.index')); ?>"
                                  class="nav-link <?php echo e(request()->is('admin/brosur') || request()->is('admin/brosur/*') ? 'active' : ''); ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Brosur</p>
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
<?php /**PATH C:\laragon\www\ppdb-ponpes\resources\views/components/dashboard/sidebar-admin.blade.php ENDPATH**/ ?>