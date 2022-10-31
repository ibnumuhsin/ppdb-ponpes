

<?php $__env->startSection('title', $title); ?>

<?php $__env->startPush('before-style'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Status Tidak Lulus</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard.index')); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.kelulusan.index')); ?>">Kelulusan</a></li>
                        <li class="breadcrumb-item active">Tidak Lulus</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                             <div class="btn-group mb-3">
                                <a class="btn btn-warning btn-sm font-weight-bold" href="<?php echo e(url()->previous()); ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="table-responsive">
                                        <table id="tidak" class="table table-striped table-bordered"
                                            style="width: 100%">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">No</th>
                                                    <th class="text-center">No Pendaftaran</th>
                                                    <th class="text-center">NISN</th>
                                                    <th class="text-center">NIK</th>
                                                    <th class="text-center">Nama Lengkap</th>
                                                    <th class="text-center">Status Kelulusan</th>
                                                    <th class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $n = 1;
                                                ?>
                                                <?php $__currentLoopData = $kelulusan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td class="text-center"><?php echo e($n); ?></td>
                                                        <td class="text-center"><?php echo e($l->no_pendaftaran); ?></td>
                                                        <td class="text-center"><?php echo e($l->nisn); ?></td>
                                                        <td class="text-center"><?php echo e($l->nik); ?></td>
                                                        <td class="text-center"><?php echo e($l->nama_lengkap); ?></td>
                                                        <td class="text-center">
                                                            <?php if($l->status_kelulusan == 0): ?>
                                                                <span class="badge badge-warning">Belum di Tentukan</span>
                                                            <?php elseif($l->status_kelulusan == 2): ?>
                                                                <span class="badge badge-danger">Tidak Lulus</span>
                                                            <?php elseif($l->status_kelulusan == 1): ?>
                                                                <span class="badge badge-success">Lulus</span>
                                                            <?php endif; ?>

                                                        </td>
                                                        <td class="text-center">
                                                            <?php if($l->status_kelulusan == 0): ?>
                                                                <small class="text-danger text-center">Aksi not found !</small>
                                                            <?php else: ?>
                                                                <a href="<?php echo e(route('admin.cetak_bukti_kelulusan.show', $l->id)); ?>" class="btn btn-info btn-sm"><i class="fas fa-download"></i></a>
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                        $n++;
                                                    ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->



    </section>



<?php $__env->stopSection(); ?>
<?php $__env->startPush('after-script'); ?>
    <script>
        $(document).ready(function() {
            $('#tidak').DataTable();
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ppdb-ponpes\resources\views/pages/admin/kelulusan/tidak_lulus.blade.php ENDPATH**/ ?>