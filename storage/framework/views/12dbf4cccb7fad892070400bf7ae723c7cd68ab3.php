

<?php $__env->startSection('title', $title); ?>

<?php $__env->startPush('before-style'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">My Profile</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard.index')); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">My Profile</li>
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
                            <form action="<?php echo e(route('admin.my_profile.update', Auth::user()->id)); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="nama">Nama Lengkap</label>
                                                    <input type="text" name="nama_lengkap"id="nama" class="form-control" value="<?php echo e(Auth::user()->nama_lengkap); ?>">
                                                    <?php $__errorArgs = ['nama_lengkap'];
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
                                                    <label for="jk">Jenis Kelamin</label>
                                                    <select name="jenis_kelamin" id="jk" class="form-control">
                                                        <option value="L" <?php echo e(Auth::user()->jenis_kelamin == 'L' ? 'selected' : ''); ?>>Laki-laki</option>
                                                        <option value="P" <?php echo e(Auth::user()->jenis_kelamin == 'P' ? 'selected' : ''); ?>>Perempuan</option>
                                                    </select>
                                                    <?php $__errorArgs = ['jenis_kelamin'];
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
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="tmp">Tempat Lahir</label>
                                                                <input type="text" name="tmp_lahir" id="tmp" class="form-control" value="<?php echo e(Auth::user()->tmp_lahir); ?>">
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
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="tgl">Tempat Lahir</label>
                                                                <input type="date" id="tgl" name="tgl_lahir" class="form-control" value="<?php echo e(Str::substr(Auth::user()->tgl_lahir, 0, -9)); ?>">
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
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="profile">Foto Profile <small class="text-danger">*Kosongi jika tidak di ubah.</small></label>
                                                    <?php if(Auth::user()->foto_profile != null): ?>
                                                        <br>
                                                        <img src="<?php echo e(Storage::url(Auth::user()->foto_profile)); ?>" alt="" class="img-fluid rounded mb-2" width="30%">
                                                    <?php endif; ?>
                                                    <input type="file" name="foto_profile" class="form-control">
                                                    <?php $__errorArgs = ['foto_profile'];
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
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" id="email" class="form-control" value="<?php echo e(Auth::user()->email); ?>">
                                                    <?php $__errorArgs = ['email'];
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
                                                    <label for="no">No Telephon</label>
                                                    <input type="number" name="no_telp" id="no" class="form-control" value="<?php echo e(Auth::user()->no_telp); ?>">
                                                    <?php $__errorArgs = ['no_telp'];
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
                                                    <label for="psw">Password <small class="text-danger">*Kosongi jika tidak di ubah !</small></label>
                                                    <input type="password" name="password" id="psw" class="form-control" value="">
                                                    <?php $__errorArgs = ['password'];
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
                                            <button class="btn btn-success btn-sm">Simpan</button>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /.container-fluid -->

    </section>





<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-script'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ppdb-ponpes\resources\views/pages/admin/profile/profile.blade.php ENDPATH**/ ?>