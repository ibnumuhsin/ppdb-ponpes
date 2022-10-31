

<?php $__env->startSection('title', $title); ?>

<?php $__env->startPush('after-style'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <section id="main-container" class="main-container">
  <div class="container">

    <h3 class="column-title">Pendiri Pondok Pesantren</h3>
    <div class="row">
        <?php if(empty($biografi)): ?>

            <div class="col-lg-12">

                <div class="text-center">
                    <h4 class="text-danger">Data tidak di temukan !</h4>
                </div>

            </div>

        <?php else: ?>

        <div class="col-lg-4">
            <div class="text-center">
              <img src="<?php echo e(Storage::url($biografi->foto)); ?>" class="rounded mx-auto d-block" alt="foto-pendiri" width="50%">
            </div>
        </div><!-- Col end -->

        <div class="col-lg-8 mt-5 mt-lg-0">
            <div class="table resposive">
              <table class="font-weight-bold" style="border: hidden">
                  <tr style="border: hidden">
                    <td>Nama</td>
                    <td>:</td>
                    <td><?php echo e($biografi->nama); ?></td>
                  </tr>
                  <tr style="border: hidden">
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><?php echo e($biografi->tmp_lahir); ?>, <?php echo e(Str::substr($biografi->tgl_lahir, 0, -9)); ?></td>
                  
                   <tr style="border: hidden">
                     <td>Alamat</td>
                     <td>:</td>
                     <td><?php echo e($biografi->alamat); ?></td>
                   </tr>
              </table>
            </div>
            <div class="card">
              <div class="card-header bg-info">
                <h5 class="card-title text-white">Biografi <?php echo e($biografi->nama); ?></h5>
              </div>
              <div class="card-body">
                  <p>
                    <?php echo $biografi->biografi; ?>

                  </p>
              </div>
            </div>
        </div><!-- Col end -->

        <?php endif; ?>

    </div><!-- Content row end -->

  </div><!-- Container end -->
</section>

<section id="facts" class="facts-area dark-bg">
  <div class="container">
    <div class="facts-wrapper">
        <div class="row text-center">
            <div class="col-lg-12">
              <h3 class="section-sub-title">Visi & Misi</h3>
            </div>
        </div>
           <div class="row">
             <div class="col-lg-12">

                <?php if(empty($vm)): ?>

                    <h4 class="text-danger">Data Tidak di Temukan !</h4>

                <?php else: ?>

               <div class="row">
                 <div class="col-lg-6">
                   <h3 class="text-center">Visi</h3>
                   <h5 class="text-center m-5 text-white">
                        <?php echo $vm->visi; ?>

                   </h5>
                 </div>
                 <div class="col-lg-6">
                   <h3 class="">Misi</h3>
                   <ul>
                       <h5 class="text-white text-left">
                            <?php echo $vm->misi; ?>

                       </h5>
                   </ul>
                 </div>
               </div>

            <?php endif; ?>

             </div>
           </div>
    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->
</section>

<section id="ts-team" class="ts-team">
  <div class="container">
    <div class="row text-center">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-4">
              <h3>Fasilitas Pesantren</h3>
                <ul>
                    <?php $__empty_1 = true; $__currentLoopData = $fasilitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                        <li class="text-left" style="list-style: none">
                            <i class="fas fa-check-square fa-xl text-success"></i>&nbsp;
                            <span class="font-weight-bold"><?php echo e($f->fasilitas); ?></span>
                        </li>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                        <h5 class="text-danger text-center">Data Tidak di Temukan !</h5>

                    <?php endif; ?>
                </ul>
            </div>
            <div class="col-lg-4">
              <h3>Extra Kurikuler</h3>
               <ul>
                <?php $__empty_1 = true; $__currentLoopData = $extra; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                    <li class="text-left" style="list-style: none">
                    <i class="fas fa-check-square fa-xl text-success"></i>&nbsp;
                    <span class="font-weight-bold"><?php echo e($e->extra_kulikuler); ?></span>
                    </li>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <h5 class="text-danger text-center">Data Tidak di Temukan !</h5>

                <?php endif; ?>
               </ul>
            </div>
            <div class="col-lg-4">
                <div class="m-5">
                  <img src="<?php echo e(asset('./landingpages/assets/logo/mondok.png')); ?>" width="75%" class="rounded mx-auto d-block" alt="...">
                </div>
            </div>
          </div>
        </div>
    </div><!--/ Title row end -->


    <!--/ Content row end -->
  </div><!--/ Container end -->
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-script'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.landing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ppdb-ponpes\resources\views/pages/landingpages/profile.blade.php ENDPATH**/ ?>