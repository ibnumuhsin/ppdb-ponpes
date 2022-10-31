

<?php $__env->startSection('title', $title); ?>

<?php $__env->startPush('before-style'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Bukti Kelulusan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard.index')); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Bukti Kelulusan</li>
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
                                    <?php if($bk == null || empty($bk)): ?>
                                        <form action="<?php echo e(route('admin.bukti_kelulusan.store')); ?>" method="POST"
                                            enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('POST'); ?>
                                        <?php else: ?>
                                            <form action="<?php echo e(route('admin.bukti_kelulusan.update', $bk->id)); ?>"
                                                method="POST" enctype="multipart/form-data">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('PUT'); ?>
                                    <?php endif; ?>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="yayasan">Logo Yayasan :</label>
                                                <?php if($bk != null || !empty($bk)): ?>
                                                    <br>
                                                    <img src="<?php echo e(Storage::url($bk->logo_yayasan)); ?>"
                                                        class="img-fluid rounded mb-3" width="40%" alt="">
                                                <?php endif; ?>
                                                <input type="file" name="logo_yayasan" class="form-control">
                                                <?php $__errorArgs = ['logo_yayasan'];
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
                                                <label for="logo_ponpes">Logo PonPes :</label>
                                                <?php if($bk != null || !empty($bk)): ?>
                                                    <br>
                                                    <img src="<?php echo e(Storage::url($bk->logo_ponpes)); ?>"
                                                        class="img-fluid rounded mb-3" width="40%" alt="">
                                                <?php endif; ?>
                                                <input type="file" name="logo_ponpes" class="form-control">
                                                <?php $__errorArgs = ['logo_ponpes'];
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
                                                <label for="header">Header :</label>
                                                <textarea name="header" id="header" cols="30" rows="10" class="form-control header"><?php echo e($bk == null ? old('header') : $bk->header); ?></textarea>
                                                <?php $__errorArgs = ['header'];
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
                                                <label for="thn">Tahun Ajaran</label>
                                                <input type="text" name="thn_ajaran" id="thn" class="form-control"
                                                    value="<?php echo e($bk == null ? old('thn_ajaran') : $bk->thn_ajaran); ?>">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="alamat">Alamat :</label>
                                                <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control"><?php echo e($bk == null ? old('alamat') : $bk->alamat); ?></textarea>
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
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="judul">Judul :</label>
                                                <textarea name="judul" id="alamat" cols="30" rows="5" class="form-control"><?php echo e($bk == null ? old('judul') : $bk->judul); ?></textarea>
                                                <?php $__errorArgs = ['judul'];
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
                                            <div class="form-group">
                                                <label for="body_1">Body 1 :</label>
                                                <textarea name="body_1" id="body_1" cols="30" rows="5" class="form-control"><?php echo e($bk == null ? old('body_1') : $bk->body_1); ?></textarea>
                                                <?php $__errorArgs = ['body_1'];
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
                                                <label for="body_2">Body 2 :</label>
                                                <textarea name="body_2" id="body_2" cols="30" rows="5" class="form-control"><?php echo e($bk == null ? old('body_2') : $bk->body_2); ?></textarea>
                                                <?php $__errorArgs = ['body_2'];
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
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="tempat">Tempat / Kota :</label>
                                                <input type="text" id="tempat" name="tempat" class="form-control"
                                                    value="<?php echo e($bk == null ? old('tempat') : $bk->tempat); ?>">
                                                <?php $__errorArgs = ['tempat'];
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
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="tanggal">Tanggal :</label>
                                                <input type="date" id="tanggal" name="tanggal" class="form-control"
                                                    value="<?php echo e($bk == null ? old('tanggal') : Str::substr($bk->tanggal, 0, -9)); ?>">
                                                <?php $__errorArgs = ['tanggal'];
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
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="jabatan_panitia">Jabatan Panitia :</label>
                                                <input type="text" name="jabatan_panitia" id="jabatan_panitia"
                                                    class="form-control"
                                                    value="<?php echo e($bk == null ? old('jabatan_panitia') : $bk->jabatan_panitia); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="nama_panitia">Nama Panitia :</label>
                                                <input type="text" name="nama_panitia" id="nama_panitia"
                                                    class="form-control"
                                                    value="<?php echo e($bk == null ? old('nama_panitia') : $bk->nama_panitia); ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="ttd_stample_panitia">Tanda Tangan Panitia :</label>
                                                <?php if($bk != null || !empty($bk)): ?>
                                                    <br>
                                                    <img src="<?php echo e(Storage::url($bk->ttd_stample_panitia)); ?>"
                                                        class="img-fluid rounded mb-3" width="50%" alt="">
                                                <?php endif; ?>
                                                <input type="file" name="ttd_stample_panitia" id="ttd_stample_panitia"
                                                    class="form-control" value="<?php echo e(old('ttd_stample_panitia')); ?>">
                                                <?php $__errorArgs = ['tdd_stample_panitia'];
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

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                                    </div>

                                    </form>
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
        CKEDITOR.replace('header');
    </script>
    <script>
        CKEDITOR.replace('alamat');
    </script>
    <script>
        CKEDITOR.replace('judul');
    </script>
    <script>
        CKEDITOR.replace('body_1');
    </script>
    <script>
        CKEDITOR.replace('body_2');
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ppdb-ponpes\resources\views/pages/admin/bukti/index.blade.php ENDPATH**/ ?>