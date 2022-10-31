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

    <?php if (isset($component)) { $__componentOriginaleca561731078ba97c7368409cc26b02b63646afc = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TopbarAdmin::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('TopbarAdmin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\TopbarAdmin::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleca561731078ba97c7368409cc26b02b63646afc)): ?>
<?php $component = $__componentOriginaleca561731078ba97c7368409cc26b02b63646afc; ?>
<?php unset($__componentOriginaleca561731078ba97c7368409cc26b02b63646afc); ?>
<?php endif; ?>

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->


        <?php if (isset($component)) { $__componentOriginalb9207c03c3ee2d68da4074c29fd9028080ec0553 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SidebarAdmin::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('SidebarAdmin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\SidebarAdmin::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb9207c03c3ee2d68da4074c29fd9028080ec0553)): ?>
<?php $component = $__componentOriginalb9207c03c3ee2d68da4074c29fd9028080ec0553; ?>
<?php unset($__componentOriginalb9207c03c3ee2d68da4074c29fd9028080ec0553); ?>
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
<?php /**PATH C:\laragon\www\ppdb-ponpes\resources\views/layouts/app.blade.php ENDPATH**/ ?>