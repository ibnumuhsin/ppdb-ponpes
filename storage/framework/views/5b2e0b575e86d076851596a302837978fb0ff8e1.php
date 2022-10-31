

<?php $__env->startSection('title', $title); ?>

<?php $__env->startPush('after-style'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <section id="main-container" class="main-container">
   <div class="container">

      
      <!--/ Title row end -->

      <div class="row">
        <div class="col-lg-12">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10">

                <?php if($is_open->is_open == 1): ?>

                <div class="card">
                  <div class="card-header bg-primary">
                    <h4 class="text-center text-white">Formulir Pendaftaran
                      Santri</h4>
                  </div>
                  <div class="card-body">
                    <form action="<?php echo e(route('pendaftaran.store')); ?>" method="post" enctype="multipart/form-data">
                      <?php echo csrf_field(); ?>
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="form-group">
                            <label for="nama">Nama Lengkap :</label>
                            <input type="text" name="nama_lengkap" value="<?php echo e(old('nama_lengkap')); ?>" class="form-control rounded" id="nama">
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
                          <div class="row">
                            <div class="col-lg-4">
                              <div class="form-group">
                                <label for="nisn">NISN :</label>
                                <input type="text" name="nisn" value="<?php echo e(old('nisn')); ?>" class="form-control rounded" id="nisn">
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
                            </div>
                            <div class="col-lg-4">
                              <div class="form-group">
                                <label for="nik">NIK :</label>
                                <input type="text" name="nik" value="<?php echo e(old('nik')); ?>" class="form-control rounded" id="nik">
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
                            </div>
                            <div class="col-lg-4">
                              <div class="form-group">
                                <label for="jk">Jenis Kelamin :</label>
                                <select name="jenis_kelamin" id="jk" class="form-control rounded">
                                  <option selected disabled>-- Pilih Jenis Kelamin --</option>
                                  <option value="L" <?php echo e(old('jenis_kelamin') == 'L' ? 'selected' : ''); ?>>Laki - Laki</option>
                                  <option value="P" <?php echo e(old('jenis_kelamin') == 'P' ? 'selected' : ''); ?>>Perempuan</option>
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
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label for="tempat">Tempat Lahir</label>
                                <input type="text" name="tmp_lahir" value="<?php echo e(old('tmp_lahir')); ?>" class="form-control rounded" id="tempat">
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
                                <label for="tanggal">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" value="<?php echo e(old('tgl_lahir')); ?>" class="form-control rounded" id="tanggal">
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
                              <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" value="<?php echo e(old('email')); ?>" class="form-control rounded" id="email">
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
                            </div>
                             <div class="col-lg-6">
                               <div class="form-group">
                                 <label for="no">No Telephone</label>
                                 <input type="number" name="no_telp" value="<?php echo e(old('no_telp')); ?>" class="form-control rounded" id="no">
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
                             </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label for="psw">Password</label>
                                  <input type="password" name="password" class="form-control rounded" id="psw">
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
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label for="2_psw">Ulangi Password</label>
                                  <input type="password" name="password_confirmation" class="form-control rounded" id="2_psw">
                                  <?php $__errorArgs = ['password_confirmation'];
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
                              <button class="btn btn-success" type="submit">Daftar</button>
                            </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

                <?php elseif($is_open->is_open == 2): ?>

                    <div class="alert alert-info m-4" role="alert">
                        <h4 class="alert-heading text-center">Maaf, Pendaftaran Santri Baru Belum Dibuka !</h4>
                        <h6 class="text-center">Pendaftaran akan dimulai pada tanggal 1 September 2022 - 30 Juni 2023</h6>
                    </div>

                <?php endif; ?>


                </div>
            </div>
        </div>
      </div>
      <!-- Content row end -->

   </div><!-- Container end -->
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-script'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.landing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ppdb-ponpes\resources\views/pages/landingpages/auth/register.blade.php ENDPATH**/ ?>