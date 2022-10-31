

<?php $__env->startSection('title', $title); ?>

<?php $__env->startPush('before-style'); ?>

<?php $__env->stopPush(); ?>

    <?php $__env->startSection('content'); ?>

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Vis & Misi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard.index')); ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Visi & Misi</li>
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

                                <?php if($brosur != null): ?>

                                <form action="<?php echo e(route('admin.brosur.update', $brosur->id)); ?>" method="POST" enctype="multipart/form-data">

                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>

                                <?php else: ?>

                                <form action="<?php echo e(route('admin.brosur.store')); ?>" method="POST" enctype="multipart/form-data">

                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('POST'); ?>

                                <?php endif; ?>

                                    <div class="row">

                                        <div class="col-lg-6">

                                            <div class="m-1">
                                                <label for="br">Preview Brosur :</label>
                                                <?php if($brosur != null): ?>
                                                    <br>
                                                    <img src="<?php echo e(Storage::url($brosur->brosur)); ?>" alt="Brosur" class="img-fluid rounded" width="50%">
                                                <?php else: ?>
                                                    <div class="alert alert-info mr-3 ml-3" role="alert">
                                                        <h5 class="text-center">Tidak ada file brosur !</h5>
                                                    </div>
                                                <?php endif; ?>
                                            </div>

                                        </div>

                                        <div class="col-lg-6">

                                            <div class="form-group m-2">
                                                <label for="brosur">Brosur</label>
                                                <input type="file" name="brosur" class="form-control" required>
                                            </div>

                                        </div>

                                        <div class="form-group mt-3">
                                            <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                            <?php if($brosur != null): ?>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="event.preventDefault(); document.getElementById('reset').submit()">Reset</button>
                                            <?php endif; ?>
                                        </div>

                                    </div>

                                </form>

                                <?php if($brosur != null): ?>
                                    <form action="<?php echo e(route('admin.brosur.destroy', $brosur->id)); ?>" method="POST" id="reset">
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

    <?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ppdb-ponpes\resources\views/pages/admin/website/brosur/index.blade.php ENDPATH**/ ?>