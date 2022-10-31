

<?php $__env->startSection('title', $title); ?>

<?php $__env->startPush('before-style'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('santri.dashboard.index')); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h4 class="font-weight-bold text-center">Selamat Datang <?php echo e(Auth::user()->nama_lengkap); ?> di
                                Aplikasi
                                PPDB Online <br> Pondok Pesantren Bahrul Maghfiroh.</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">

                                <div class="col-lg-4">
                                    <a href="<?php echo e(route('santri.biodata.index')); ?>" class="text-decoration-none text-dark">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <i class="fas fa-sticky-note fa-10x"></i>
                                                <h5 class="mt-3 font-weight-bold">Lengkapi Pendaftaran</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-4">
                                    <a href="<?php echo e(route('santri.biodata.santri')); ?>" class="text-decoration-none text-dark">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <i class="fas fa-users fa-10x"></i>
                                                <h5 class="mt-3 font-weight-bold">Biodata Santri</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-4">
                                    <a href="<?php echo e(route('santri.pengumuman.index')); ?>" class="text-decoration-none text-dark">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <i class="fas fa-bullhorn fa-10x"></i>
                                                <h5 class="mt-3 font-weight-bold">Pengumuman</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-script'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.siswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ppdb-ponpes\resources\views/pages/santri/dashboard.blade.php ENDPATH**/ ?>