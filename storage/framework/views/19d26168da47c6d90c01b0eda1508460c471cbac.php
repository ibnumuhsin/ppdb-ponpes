

<?php $__env->startSection('title', $title); ?>

<?php $__env->startPush('before-style'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kelulusan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard.index')); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Kelulusan</li>
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

                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success btn-sm mb-3 mt-3" data-toggle="modal"
                                            data-target="#lulus"><i class="fa fa-graduation-cap"></i> Keterangan
                                            Lulus</button>
                                    </div>

                                    <div class="btn-group">
                                        <a class="btn btn-success btn-sm" href="<?php echo e(route('admin.status.lulus')); ?>">Lulus</a>
                                    </div>

                                    <div class="btn-group">
                                        <a class="btn btn-danger btn-sm" href="<?php echo e(route('admin.tidak.lulus')); ?>">Tidak Lulus</a>
                                    </div>

                                    <div class="table-responsive">
                                        <table id="kelulusan" class="table table-striped table-bordered"
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
                                                            <hr>
                                                            <div class="btn-group">
                                                                <button class="btn btn-<?php echo e($l->status_kelulusan == 0 ? 'warning' : ( $l->status_kelulusan == 1 ? 'success' : 'secondary' )); ?> btn-sm" onclick="event.preventDefault(); document.getElementById('lulus_1_<?php echo e($l->id); ?>').submit()"><i class="fas fa-check-circle"></i></button>
                                                                <button class="btn btn-<?php echo e($l->status_kelulusan == 0 ? 'warning' : ( $l->status_kelulusan == 2 ? 'danger' : 'secondary' )); ?> btn-sm" onclick="event.preventDefault(); document.getElementById('lulus_2_<?php echo e($l->id); ?>').submit()"><i class="fas fa-times-circle"></i></button>
                                                            </div>

                                                            <form action="<?php echo e(route('admin.kelulusan.update', $l->id)); ?>"
                                                                method="POST" enctype="multipart/form-data" id="lulus_1_<?php echo e($l->id); ?>">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('PUT'); ?>
                                                                <input type="hidden" name="status_kelulusan" value="1"
                                                                    readonly>
                                                            </form>
                                                            <form action="<?php echo e(route('admin.kelulusan.update', $l->id)); ?>"
                                                                method="POST" enctype="multipart/form-data" id="lulus_2_<?php echo e($l->id); ?>">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('PUT'); ?>
                                                                <input type="hidden" name="status_kelulusan" value="2"
                                                                    readonly>
                                                            </form>

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



    <div class="modal fade" id="lulus" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title" id="staticBackdropLabel">Keterangan Kelulusan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">

                            <?php if($ket == null || empty($ket)): ?>
                                <form action="<?php echo e(route('admin.keterangan.store')); ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('POST'); ?>
                                <?php else: ?>
                                    <form action="<?php echo e(route('admin.keterangan.update', $ket->id)); ?>" method="POST"
                                        enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                            <?php endif; ?>


                            <div class="form-group">
                                <textarea name="keterangan" id="ketlulus" class="form-control ketlulus" cols="30" rows="10"><?php echo e($ket == null ? old('keterangan') : $ket->keterangan); ?></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                <?php if($ket != null): ?>
                                    <button type="button" class="btn btn-danger btn-sm"
                                        onclick="event.preventDefault(); document.getElementById('reset').submit()">Reset</button>
                                <?php endif; ?>
                            </div>

                            </form>

                            <?php if(!empty($ket)): ?>
                                <form action="<?php echo e(route('admin.keterangan.destroy', $ket->id)); ?>" method="POST"
                                    id="reset">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                </form>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>



<?php $__env->stopSection(); ?>
<?php $__env->startPush('after-script'); ?>
    <script>
        $(document).ready(function() {
            $('#kelulusan').DataTable();
        });
    </script>

    <script>
        CKEDITOR.replace('ketlulus');
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ppdb-ponpes\resources\views/pages/admin/kelulusan/index.blade.php ENDPATH**/ ?>