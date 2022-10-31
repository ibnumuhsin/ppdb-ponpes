

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
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard.index')); ?>">Dashboard</a></li>
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

                            <h4 class="font-weight-bold mb-3">Selamat Datang <?php echo e(Auth::user()->nama_lengkap); ?>, di Dashboard
                                Administrator PPDB Online
                                Pondok Pesantren Bahrul Maghfiroh</h4>

                            <!-- Small boxes (Stat box) -->
                            <div class="row">
                                <!-- ./col -->
                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-warning">
                                        <div class="inner">
                                            <h3><?php echo e($user_regis); ?></h3>

                                            <p class="font-weight-bold">Jumlah Pendaftar</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-person-add"></i>
                                        </div>
                                        <a href="<?php echo e(route('admin.siswa.index')); ?>" class="small-box-footer">More info <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-info">
                                        <div class="inner">
                                            <h3><?php echo e($lulus); ?></h3>

                                            <p class="font-weight-bold">Total Lulus PPDB</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fas fa-graduation-cap"></i>
                                        </div>
                                        <a href="<?php echo e(route('admin.status.lulus')); ?>" class="small-box-footer">More info <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-success">
                                        <div class="inner">
                                            <h3><?php echo e($tdk_lulus); ?></h3>

                                            <p class="font-weight-bold">Tidak Lulus PPDB</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fas fa-times-circle"></i>
                                        </div>
                                        <a href="<?php echo e(route('admin.tidak.lulus')); ?>" class="small-box-footer">More info <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-danger">
                                        <div class="inner">
                                            <h3><?php echo e($admin); ?></h3>

                                            <p class="font-weight-bold">Jumlah Admin</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fas fa-users"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <h6 class="font-weight-bold">Setting Pendaftaran PPDB</h6>
                                             <div class="btn-group">
                                                <button class="btn btn-<?php echo e($register_is->is_open == 1 ? 'success' : 'secondary'); ?> btn-sm" onclick="event.preventDefault(); document.getElementById('is_open_<?php echo e($register_is->id); ?>').submit()"><i class="fas fa-check-circle"></i> Buka</button>
                                                <button class="btn btn-<?php echo e($register_is->is_open == 2 ? 'danger' : 'secondary'); ?> btn-sm" onclick="event.preventDefault(); document.getElementById('is_close_<?php echo e($register_is->id); ?>').submit()"><i class="fas fa-times-circle"></i> Tutup</button>
                                            </div>

                                            <form action="<?php echo e(route('admin.dashboard.update', $register_is->id)); ?>"
                                                method="POST" enctype="multipart/form-data" id="is_open_<?php echo e($register_is->id); ?>">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('PUT'); ?>
                                                <input type="hidden" name="is_open" value="1" readonly>
                                            </form>
                                            <form action="<?php echo e(route('admin.dashboard.update', $register_is->id)); ?>"
                                                method="POST" enctype="multipart/form-data" id="is_close_<?php echo e($register_is->id); ?>">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('PUT'); ?>
                                                <input type="hidden" name="is_open" value="2" readonly>
                                            </form>
                                        </div>

                                        <div class="col-lg-6">
                                            <h5 class="font-weight-bold">Status :
                                                <?php if($register_is->is_open == 1): ?>
                                                    <span class="badge badge-success">Buka</span>
                                                <?php elseif($register_is->is_open == 2): ?>
                                                    <span class="badge badge-danger">Tutup</span>
                                                <?php endif; ?>
                                            </h5>
                                        </div>
                                    </div>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ppdb-ponpes\resources\views/pages/admin/dashboard.blade.php ENDPATH**/ ?>