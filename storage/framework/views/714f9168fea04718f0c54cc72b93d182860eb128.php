<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $__env->yieldContent('title'); ?> | PPDB PonTren Bahrul Maghfiroh</title>


    <?php echo $__env->yieldPushContent('before-style'); ?>

        <?php echo $__env->make('includes.dashboard.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldPushContent('after-style'); ?>


</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper">

  

  <!-- Navbar -->

    <?php if (isset($component)) { $__componentOriginal914a63bb4916963e54894342d2a616559c3cb53c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TopbarSiswa::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('TopbarSiswa'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\TopbarSiswa::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal914a63bb4916963e54894342d2a616559c3cb53c)): ?>
<?php $component = $__componentOriginal914a63bb4916963e54894342d2a616559c3cb53c; ?>
<?php unset($__componentOriginal914a63bb4916963e54894342d2a616559c3cb53c); ?>
<?php endif; ?>

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->


        <?php if (isset($component)) { $__componentOriginal53c1e647bb83a90abf23ae517a0f1c47c2b2f40c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SidebarSiswa::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('SidebarSiswa'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\SidebarSiswa::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53c1e647bb83a90abf23ae517a0f1c47c2b2f40c)): ?>
<?php $component = $__componentOriginal53c1e647bb83a90abf23ae517a0f1c47c2b2f40c; ?>
<?php unset($__componentOriginal53c1e647bb83a90abf23ae517a0f1c47c2b2f40c); ?>
<?php endif; ?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php echo $__env->yieldContent('content'); ?>



  </div>
  <!-- /.content-wrapper -->

    <?php if (isset($component)) { $__componentOriginalb3db5772e7c619b2ed5983f83a12c5431a36ae24 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FooterDashboard::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('FooterDashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\FooterDashboard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb3db5772e7c619b2ed5983f83a12c5431a36ae24)): ?>
<?php $component = $__componentOriginalb3db5772e7c619b2ed5983f83a12c5431a36ae24; ?>
<?php unset($__componentOriginalb3db5772e7c619b2ed5983f83a12c5431a36ae24); ?>
<?php endif; ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

    <?php echo $__env->yieldPushContent('before-script'); ?>

        <?php echo $__env->make('includes.dashboard.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldPushContent('after-script'); ?>

</body>
</html>
<?php /**PATH C:\laragon\www\ppdb-ponpes\resources\views/layouts/siswa.blade.php ENDPATH**/ ?>