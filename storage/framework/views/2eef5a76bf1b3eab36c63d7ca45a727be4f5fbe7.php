

<?php $__env->startSection('title', $title); ?>

<?php $__env->startPush('before-style'); ?>

<?php $__env->stopPush(); ?>

    <?php $__env->startSection('content'); ?>

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Siswa/i</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard.index')); ?>">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="<?php echo e(route('admin.siswa.index')); ?>">Data Siswa/i</a></li>
              <li class="breadcrumb-item active">Edit</li>
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

                        <div class="btn-group mb-3">
                            <a href="<?php echo e(route('admin.siswa.index')); ?>" class="btn btn-warning btn-sm font-weight-bold"><i class="fa fa-arrow-circle-left"></i>&nbsp;Kembali</a>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">

                                <form action="<?php echo e(route('admin.siswa.update', $data->id)); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="nama">Nama Legkap :</label>
                                                <input type="text" name="nama_lengkap" id="nama" class="form-control" value=<?php echo e($data->nama_lengkap); ?>>
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
                                                <label for="nisn">NISN :</label>
                                                <input type="number" name="nisn" id="nisn" class="form-control" value="<?php echo e($data->nisn); ?>">
                                                <?php $__errorArgs = ['nisn'];
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
                                                <label for="nik">NIK :</label>
                                                <input type="number" name="nik" id="nik" class="form-control" value="<?php echo e($data->nik); ?>">
                                                <?php $__errorArgs = ['nik'];
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
                                                <label for="jenis_kelmin">Jenis Kelamin :</label>
                                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                                    <option selected disabled>-- Pilih Jenis Kelamin --</option>
                                                    <option value="L" <?php echo e($data->jenis_kelamin == 'L' ? 'selected' : ''); ?>>Laki - Laki</option>
                                                    <option value="P" <?php echo e($data->jenis_kelamin == 'P' ? 'selected' : ''); ?>>Perempuan</option>
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
                                                <div class="col-lg-6">
                                                     <div class="form-group">
                                                        <label for="tmp">Tempat Lahir :</label>
                                                        <input type="text" name="tmp_lahir" id="tmp" class="form-control" value="<?php echo e($data->tmp_lahir); ?>">
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
                                                        <label for="tgl">Tanggal Lahir :</label>
                                                        <input type="date" name="tgl_lahir" id="tgl" class="form-control" value="<?php echo e(Str::substr($data->tgl_lahir, 0, -9)); ?>">
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
                                            </div>

                                        </div>
                                        <div class="col-lg-6">

                                            <div class="form-group">
                                                <label for="email">Email :</label>
                                                <input type="email" name="email" id="email" class="form-control" value="<?php echo e($data->email); ?>">
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
                                                <label for="no_telp">No Telp :</label>
                                                <input type="number" name="no_telp" id="no_telp" class="form-control" value="<?php echo e($data->no_telp); ?>">
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
                                                <label for="foto">Foto Profile :</label>
                                                <input type="file" name="foto_profile" class="form-control" id="foto">
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

                                            <div class="form-group">
                                                    <label for="pswd">Password : <small class="text-danger">*Kosongi jika tidak di edit</small></label>
                                                    <input type="password" name="password" class="form-control" id="pswd">
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

                                    <div class="form-group mt-3">
                                        <button type="submit" class="btn btn-success btn-sm">Simpan</button>
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

    <?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ppdb-ponpes\resources\views/pages/admin/user/siswa/edit.blade.php ENDPATH**/ ?>