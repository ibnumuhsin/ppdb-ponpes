

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

                                <?php if($vm != null): ?>

                                <form action="<?php echo e(route('admin.visi_misi.update', $vm->id)); ?>" method="POST" enctype="multipart/form-data">

                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>

                                <?php else: ?>

                                <form action="<?php echo e(route('admin.visi_misi.store')); ?>" method="POST" enctype="multipart/form-data">

                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('POST'); ?>

                                <?php endif; ?>

                                    <div class="row">

                                        <div class="col-lg-6">

                                             <div class="form-group">
                                                <label for="visi">Visi</label>
                                               <textarea name="visi" id="visi" class="form-control" cols="30" rows="10"><?php echo e($vm == null ? old('visi') : $vm->visi); ?></textarea>
                                                <?php $__errorArgs = ['visi'];
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
                                                <label for="misi">Misi</label>
                                               <textarea name="misi" id="misi" class="form-control" cols="30" rows="10"><?php echo e($vm == null ? old('misi') : $vm->misi); ?></textarea>
                                                <?php $__errorArgs = ['misi'];
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

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                            <?php if($vm != null): ?>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="event.preventDefault(); document.getElementById('reset').submit()">Reset</button>
                                            <?php endif; ?>
                                        </div>

                                    </div>

                                </form>

                                <?php if($vm != null): ?>
                                    <form action="<?php echo e(route('admin.visi_misi.destroy', $vm->id)); ?>" method="POST" id="reset">
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
        <script>
            CKEDITOR.replace( 'visi' );
            CKEDITOR.replace( 'misi' );
        </script>
    <?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ppdb-ponpes\resources\views/pages/admin/website/visimisi/index.blade.php ENDPATH**/ ?>