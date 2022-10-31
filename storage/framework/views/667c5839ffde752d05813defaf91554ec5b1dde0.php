

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
              <div class="col-lg-5">
                  <div class="card mt-4">
                    <div class="card body">
                        <div class="d-flex justify-content-center m-3">
                            <img src="<?php echo e(asset('./landingpages/assets/logo/logo.png')); ?>" class="rounded mx-auto d-block" alt="..." width="30%">
                        </div>
                        <h4 class="text-center">PPDB Bahrul Maghfiroh</h4>
                        <h5 class="text-center"><i>Tahun Pelajaran 2023/2024</i></h5>
                        <?php if($errors->any()): ?>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <p class="text-danger"><?php echo e($error); ?></p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        <div class="m-5">
                        <form action="<?php echo e(route('santri.login')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('POST'); ?>
                          <div class="form-group">
                            <label for="nisn" class="font-weight-bold">NISN :</label>
                            <input type="number" name="nisn" id="nisn" class="form-control rounded" required>
                          </div>
                          <div class="form-group">
                            <label for="password" class="font-weight-bold">Password :</label>
                            <input type="password" name="password" id="password" class="form-control rounded" required>
                          </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block">Login</button>
                          </div>
                          <span class="font-weight-bold">Belum memiliki akun ? <a href="<?php echo e(route('pendaftaran.index')); ?>" class="text-info">Daftar Sekarang</a></span>
                        </form>
                      </div>
                    </div>
                </div>
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

<?php echo $__env->make('layouts.landing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ppdb-ponpes\resources\views/pages/landingpages/auth/login.blade.php ENDPATH**/ ?>