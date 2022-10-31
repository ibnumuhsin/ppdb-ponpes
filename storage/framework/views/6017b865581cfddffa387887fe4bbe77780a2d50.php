


<?php $__env->startSection('title', $title); ?>


<?php $__env->startPush('after-style'); ?>

<?php $__env->stopPush(); ?>


<?php $__env->startSection('content'); ?>
    <section class="jumbotron jumbotron-fluid bg-white">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-8">
            <div class="text-jumbotron p-5">
              <h2>Pendaftaran Peserta Didik Baru</h2>
              <h3>Selamat Datang di Sistem PPDB ( Online ) <br> Pondok Pesantren Bahrul Maghfiroh Bintaro <br>
                bagi calon wali santri dan calon santri baru
              </h3>
              <h4>Tahun Pelajaran 2022/2023</h4>
              <h6><i>Periode 01 November 2022 s/d 31 Juni 2023</i></h6>
            </div>
            <div class="row">
              <div class="col-lg-8">
                <div class="row px-5 button-jumbotron">
                  <div class="col-lg-6 mb-3">
                    <a href="<?php echo e(route('pendaftaran.index')); ?>" class="btn btn-warning font-weight-bold">Daftar Sekarang</a>
                  </div>
                  <div class="col-lg-6 mb-3">
                    <a href="<?php echo e(route('brosur.dwonload')); ?>" class="btn btn-success font-weight-bold"><i class="fa-solid fa-file-arrow-down"></i>&nbsp;Download Brosur</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
              <div class="logo-jumbotron py-auto px-auto">
                <img src="<?php echo e(asset('landingpages/assets/logo/logo.png')); ?>" class="rounded mx-auto d-block mt-5" style="vertical-align:middle; max-width: 50%"
                  alt="">
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="call-to-action no-padding dark-bg">
  <div class="container">
    <div class="action-style-box">
        <div class="row">
          <div class="col-md-12 text-center text-md-left">
              <div class="call-to-action-text">
                <h1 class="text-center text-white">Alur Pendaftaran Santri Online</h1>
              </div>
          </div><!-- Col end -->
          <div class="col-md-6 offset-md-3">
            <ul class="timeline">
                <?php $__empty_1 = true; $__currentLoopData = $alur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                    <li>
                        <h4 class="text-white"><?php echo e($a->judul); ?></h4>
                        <p class="text-white"><?php echo e($a->deskripsi); ?></p>
                    </li>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <div class="alert alert-info text-center mt-3" role="alert">
                        <h5 class="font-weight-bold">Data tidak di temukan !</h5>
                    </div>

                <?php endif; ?>
            </ul>
          </div>
        </div>
        <!-- row end -->
    </div><!-- Action style box -->
  </div><!-- Container end -->
</section><!-- Action end -->

<section id="ts-features" class="ts-features pb-2">
  <div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="row">
            <div class="col-lg-4 col-md-4">
              <div class="ts-service-box">
                <div class="ts-service-image-wrapper">
                  <img loading="lazy" class="img-fluid rounded" src="<?php echo e(asset('./landingpages/assets/logo/syarat.png')); ?>" alt="service-image" width="75%" class="rounded mx-auto d-block">
                </div>
              </div>
            </div>
            <div class="col-lg-8 col-md-8">
              <h2 class="text-center">Persyaratan Pendaftaran</h2>
              <p class="font-weight-bold">Untuk memenuhi persyaratan pendaftaran, ada beberapa berkas yang harus diupload di system pendaftaran :</p>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-8">
                            <ul>
                                <?php $__empty_1 = true; $__currentLoopData = $syarat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                                    <li style="list-style: none">
                                        <i class="fas fa-check-square fa-xl text-success"></i>&nbsp;
                                        <span class="font-weight-bold"><?php echo e($s->persyaratan); ?></span>
                                    </li>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                    <div class="alert alert-info text-center mt-3" role="alert">
                                        <h5 class="font-weight-bold">Data tidak di temukan !</h5>
                                    </div>

                                <?php endif; ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div><!-- Content row end -->`
  </div><!-- Container end -->
</section><!-- Feature are end -->


<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-script'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.landing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ppdb-ponpes\resources\views/pages/landingpages/index.blade.php ENDPATH**/ ?>