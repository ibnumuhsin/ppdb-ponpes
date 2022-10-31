

<?php $__env->startSection('title', $title); ?>

<?php $__env->startPush('before-style'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Biografi Pendiri</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard.index')); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Biografi Pendiri</li>
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

                            <div class="row">
                                <div class="col-lg-12">

                                    <?php if($biografi != null): ?>
                                        <form action="<?php echo e(route('admin.biografi_pendiri.update', $biografi->id)); ?>"
                                            method="POST" enctype="multipart/form-data">

                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>
                                        <?php else: ?>
                                            <form action="<?php echo e(route('admin.biografi_pendiri.store')); ?>" method="POST"
                                                enctype="multipart/form-data">

                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('POST'); ?>
                                    <?php endif; ?>

                                    <div class="row">

                                        <div class="col-lg-6">

                                            <div class="form-group">
                                                <label for="nama">Nama Pendiri</label>
                                                <input type="text" id="nama" name="nama" class="form-control"
                                                    value="<?php echo e($biografi == null ? old('nama') : $biografi->nama); ?>"
                                                    required>
                                                <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <small class="text-danger"><?php echo e($message); ?></small>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label for="tmp_lahir">Tempat Lahir</label>
                                                    <input type="text" name="tmp_lahir" class="form-control"
                                                        value="<?php echo e($biografi == null ? old('tmp_lahir') : $biografi->tmp_lahir); ?>">
                                                    <?php $__errorArgs = ['tmp_lahir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <small class="text-danger"><?php echo e($message); ?></small>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                                        <input type="date" id="tgl_lahir" name="tgl_lahir"
                                                            class="form-control"
                                                            value="<?php echo e($biografi == null ? old('tgl_lahir') : Str::substr($biografi->tgl_lahir, 0, -9)); ?>"
                                                            required>
                                                        <?php $__errorArgs = ['tgl_lahir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <small class="text-danger"><?php echo e($message); ?></small>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label for="tmp_wafat">Tempat Wafat</label>
                                                    <input type="text" id="tmp_wafat" name="tmp_wafat"
                                                        class="form-control"
                                                        value="<?php echo e($biografi == null ? old('tmp_wafat') : $biografi->tmp_wafat); ?>">
                                                    <?php $__errorArgs = ['tmp_wafat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <small class="text-danger"><?php echo e($message); ?></small>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="tgl_wafat">Tanggal Wafat</label>
                                                        <input type="date" id="tgl_wafat" name="tgl_wafat"
                                                            class="form-control"
                                                            value="<?php echo e($biografi == null ? old('tgl_wafat') : Str::substr($biografi->tgl_wafat, 0, -9)); ?>">
                                                        <?php $__errorArgs = ['tgl_wafat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <small class="text-danger"><?php echo e($message); ?></small>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control"><?php echo e($biografi == null ? old('alamat') : $biografi->alamat); ?></textarea>
                                                <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <small class="text-danger"><?php echo e($message); ?></small>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>

                                            <div class="form-group">
                                                <label for="foto">Foto Pendiri</label>
                                                <?php if($biografi != null): ?>
                                                    <br>
                                                    <img src="<?php echo e(Storage::url($biografi->foto)); ?>"
                                                        class="img-fluid rounded mb-2" alt="foto_pendiri" width="40%">
                                                    <br>
                                                <?php endif; ?>
                                                <input type="file" id="foto" name="foto" class="form-control"
                                                    value="<?php echo e(old('foto')); ?>">
                                                <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <small class="text-danger"><?php echo e($message); ?></small>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>

                                        </div>

                                        <div class="col-lg-6">

                                            <div class="form-group">
                                                <label for="biografi">Biografi Pendiri</label>
                                                <textarea name="biografi" id="biografi" class="form-control" cols="30" rows="10"><?php echo e($biografi == null ? old('biografi') : $biografi->biografi); ?></textarea>
                                                <?php $__errorArgs = ['biografi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <small class="text-danger"><?php echo e($message); ?></small>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                            <?php if($biografi != null): ?>
                                                <button type="button" class="btn btn-danger btn-sm"
                                                    onclick="event.preventDefault(); document.getElementById('reset').submit()">Reset</button>
                                            <?php endif; ?>
                                        </div>

                                    </div>

                                    </form>

                                    <?php if($biografi != null): ?>
                                        <form action="<?php echo e(route('admin.biografi_pendiri.destroy', $biografi->id)); ?>"
                                            method="POST" id="reset">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                        </form>
                                    <?php endif; ?>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div><!-- /.container-fluid -->

    </section>


<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-script'); ?>
    <script>
        CKEDITOR.replace('biografi');
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ppdb-ponpes\resources\views/pages/admin/website/biografi/index.blade.php ENDPATH**/ ?>