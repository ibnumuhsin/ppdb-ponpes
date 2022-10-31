<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">

  <title><?php echo $__env->yieldContent('title'); ?> | PPDB I PonTren Bahrul Maghfiroh</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="<?php echo e(asset('./langingpages/assets/logo/logo.png')); ?>">

  <!-- CSS
================================================== -->
    <?php echo $__env->yieldPushContent('before-style'); ?>

        <?php echo $__env->make('includes.landing.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldPushContent('after-style'); ?>

</head>
<body>
  <div class="body-inner">

    <?php if (isset($component)) { $__componentOriginal0d1e85b0eeec40bc53ea15c48c6450009a48fe57 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\NavbarLanding::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('NavbarLanding'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\NavbarLanding::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0d1e85b0eeec40bc53ea15c48c6450009a48fe57)): ?>
<?php $component = $__componentOriginal0d1e85b0eeec40bc53ea15c48c6450009a48fe57; ?>
<?php unset($__componentOriginal0d1e85b0eeec40bc53ea15c48c6450009a48fe57); ?>
<?php endif; ?>


    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>



    <?php if (isset($component)) { $__componentOriginalaf3d65f03c39f41aefeee02a5f15741624227d91 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FooterLanding::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('FooterLanding'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\FooterLanding::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaf3d65f03c39f41aefeee02a5f15741624227d91)): ?>
<?php $component = $__componentOriginalaf3d65f03c39f41aefeee02a5f15741624227d91; ?>
<?php unset($__componentOriginalaf3d65f03c39f41aefeee02a5f15741624227d91); ?>
<?php endif; ?>

  <!-- Footer end -->


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->

    <?php echo $__env->yieldPushContent('before-script'); ?>

        <?php echo $__env->make('includes.landing.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldPushContent('after-script'); ?>

  </div><!-- Body inner end -->
  </body>

  </html>
<?php /**PATH C:\laragon\www\ppdb-ponpes\resources\views/layouts/landing.blade.php ENDPATH**/ ?>