

<?php $__env->startSection('title', $title); ?>

<?php $__env->startPush('before-style'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Syarat Pendaftaran</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard.index')); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Syarat Pendaftaran</li>
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

                            <div class="btn-group mb-5">
                                <button class="btn btn-success btn-sm font-weight-bold" data-toggle="modal"
                                    data-target="#add"><i class="fa fa-plus-circle mr-2"></i>Tambah Data</button>
                            </div>

                            <div class="table-responsive">

                                <table id="syarat" class="table table-striped table-bordered" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Persyaratan</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $n = 1;
                                        ?>
                                        <?php $__currentLoopData = $syarat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td class="text-center"><?php echo e($n); ?>.</td>
                                                <td class="text-center"><?php echo e($s->persyaratan); ?></td>
                                                <td class="d-flex justify-content-center">
                                                    <div class="btn-group">
                                                        <button class="btn btn-warning btn-sm" data-toggle="modal"
                                                            data-target="#edit<?php echo e($s->id); ?>"><i
                                                                class="fa fa-pencil-alt"></i></button>
                                                        <button class="btn btn-danger btn-sm" data-toggle="modal"
                                                            data-target="#hapus<?php echo e($s->id); ?>"><i
                                                                class="fa fa-trash-alt"></i></button>


                                                        <!-- Modal -->
                                                        <div class="modal fade" id="hapus<?php echo e($s->id); ?>"
                                                            data-backdrop="static" data-keyboard="false" tabindex="-1"
                                                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header bg-danger">
                                                                        <h5 class="modal-title font-weight-bold"
                                                                            id="staticBackdropLabel">Hapus Data |
                                                                            <?php echo e($s->judul); ?></h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row d-flex justify-content-center">
                                                                            <div class="col-lg-12">
                                                                                <div class="alert alert-info text-center"
                                                                                    role="alert">
                                                                                    <p class="font-weight-bold">Apakah anda
                                                                                        yakin akan menghapus data ini ?</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary btn-sm"
                                                                            data-dismiss="modal">Close</button>

                                                                        <form
                                                                            action="<?php echo e(route('admin.syarat_daftar.destroy', $s->id)); ?>"
                                                                            method="POST" enctype="multipart/form-data">
                                                                            <?php echo csrf_field(); ?>
                                                                            <?php echo method_field('DELETE'); ?>
                                                                            <button class="btn btn-danger btn-sm"
                                                                                type="submit">Hapus</button>
                                                                        </form>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>

                                                    <!-- Modal Edit -->
                                                    <div class="modal fade" id="edit<?php echo e($s->id); ?>"
                                                        data-backdrop="static" data-keyboard="false" tabindex="-1"
                                                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-warning">
                                                                    <h5 class="modal-title font-weight-bold"
                                                                        id="staticBackdropLabel">Edit Data |
                                                                        <?php echo e($s->judul); ?></h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <form
                                                                                action="<?php echo e(route('admin.syarat_daftar.update', $s->id)); ?>"
                                                                                method="POST"
                                                                                enctype="multipart/form-data">

                                                                                <?php echo csrf_field(); ?>
                                                                                <?php echo method_field('PUT'); ?>

                                                                                <div class="form-group">
                                                                                    <label for="persyaratan">Persyaratan
                                                                                        :</label>
                                                                                    <input type="text" name="persyaratan"
                                                                                        class="form-control"
                                                                                        id="persyaratan"
                                                                                        value="<?php echo e($s->persyaratan); ?>"
                                                                                        required>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <button class="btn btn-success btn-sm"
                                                                                        type="submit">Simpan</button>
                                                                                </div>

                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

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

        </div><!-- /.container-fluid -->

    </section>


    <!-- Modal -->
    <div class="modal fade" id="add" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title font-weight-bold" id="staticBackdropLabel">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="<?php echo e(route('admin.syarat_daftar.store')); ?>" method="POST"
                                enctype="multipart/form-data">

                                <?php echo csrf_field(); ?>
                                <?php echo method_field('POST'); ?>

                                <div class="form-group">
                                    <label for="persyaratan">Persyaratan :</label>
                                    <input type="text" name="persyaratan" class="form-control" id="persyaratan"
                                        value="<?php echo e(old('persyaratan')); ?>" required>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                                </div>

                            </form>
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
            $('#syarat').DataTable();
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ppdb-ponpes\resources\views/pages/admin/website/syarat/index.blade.php ENDPATH**/ ?>