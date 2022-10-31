<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Administrator | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="<?php echo e(url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('dashboard/plugins/fontawesome-free/css/all.min.css')); ?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo e(asset('dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('dashboard/dist/css/adminlte.min.css')); ?>">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card">
        <div class="login-logo">
               <a href="<?php echo e(route('admin.login')); ?>">
                  <img src="<?php echo e(asset('landingpages/assets/logo/logo.png')); ?>" alt="" class="img-fluid mt-4" width="25%">
                  <h4 class="mt-3 font-weight-bold">Login Administrator</h4>
                  <h5 class="m-1">PPDB PonPes Bahrul Maghfiroh</h5>
              </a>
        </div>
    <div class="card-body login-card-body">
                <?php if($errors->any()): ?>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p class="text-danger"><?php echo e($error); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
        <form action="<?php echo e(route('admin.login')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('POST'); ?>
            <div class="input-group mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row">
            <!-- /.col -->
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block font-weight-bold">Masuk</button>
            </div>
            <!-- /.col -->
            </div>
        </form>
    </div>
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo e(asset('dashboard/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('dashboard/dist/js/adminlte.min.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\laragon\www\ppdb-ponpes\resources\views/pages/admin/auth/login.blade.php ENDPATH**/ ?>