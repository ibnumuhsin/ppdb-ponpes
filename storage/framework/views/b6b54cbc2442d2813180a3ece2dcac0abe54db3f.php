

<?php $__env->startSection('title', $title); ?>

<?php $__env->startPush('before-style'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pengumuman</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('santri.dashboard.index')); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Pengumuman</li>
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
                        <div class="card-header">
                            <h5 class="card-title font-weight-bold"><i class="fa fa-bullhorn"></i>&nbsp;Pengumuman</h5>
                        </div>
                        <div class="card-body">
                            <?php if($info->status_verifikasi == 2): ?>
                                <div class="alert alert-info">
                                    <h4 class="text-center"><i class="icon fas fa-ban"></i> Informasi</h4>
                                    <h6 class="text-center">Maaf, pendafataran anda belum diverifikasi. Silahkan
                                        lengkapi biodata anda dan tunggu konfirmasi.</h6>
                                </div>
                            <?php elseif($info->status_verifikasi == 1 && $info->status_kelulusan == 0): ?>
                                <div class="alert alert-success">
                                    <h4 class="text-center"><i class="icon fas fa-check"></i> Informasi</h4>
                                    <h6 class="text-center">Selamat, pendaftaran anda telah Terverifikasi.</h6>
                                </div>

                                <div class="card">
                                    <div class="card-header bg-info">
                                        <h5 class="card-title font-weight-bold">Jadwal dan Materi Test</h5>
                                    </div>
                                    <div class="card-body">
                                        <?php if($mt == null || empty($mt)): ?>
                                            <h6 class="font-weight-bold text-center text-danger">Data kosong.... !</h6>
                                        <?php else: ?>
                                            <p><?php echo $mt->materi_test; ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php elseif($info->status_kelulusan == 1 && $info->status_verifikasi == 1): ?>
                                <div class="card">
                                    <div class="card-header bg-info">
                                        <h5 class="card-title font-weight-bold">Selamat, anda dinyatakan lulus</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="alert alert-success" role="alert">
                                            <h6 class="text-center">
                                                Selamat <?php echo e(Auth::user()->nama_lengkap); ?>, anda <span
                                                    class="font-weight-bold">DITERIMA</span> sebagai Santri Baru di Pondok
                                                Pesantren Bahrul Maghfiroh Bintaro, Silahkan Cetak surat pengumuman bukti
                                                kelulusan seleksi.
                                            </h6>
                                        </div>

                                        <div class="row d-flex justify-content-center">
                                            <div class="col-lg-4">
                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <a href="<?php echo e(route('santri.cetak_bukti_kelulusan.index')); ?>"
                                                            class="text-decoration-none text-dark">
                                                            <i class="fa fa-print fa-7x"></i>
                                                            <h6 class="font-weight-bold m-3">Cetak Bukti Kelulusan</h6>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php if(($lulus != null) | !empty($lulus)): ?>
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="font-weight-bold">Keterangan</h5>
                                                    <p><?php echo $lulus->keterangan; ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                    </div>
                                </div>
                            <?php elseif($info->status_kelulusan == 2 && $info->status_verifikasi == 1): ?>
                                <div class="card">
                                    <div class="card-header bg-info">
                                        <h5 class="card-title font-weight-bold">Mohon Maaf, kamu belum beruntung</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="alert alert-danger" role="alert">
                                            <h6 class="text-center">
                                                Mohon Maaf <?php echo e(Auth::user()->nama_lengkap); ?>, kamu <span
                                                    class="font-weight-bold">Belum memenuhi kriteria</span> sebagai Santri Baru di
                                                Pondok
                                                Pesantren Bahrul Maghfiroh Bintaro,
                                                Jangan berhenti berusaha dan tetap semangat semoga selalu diberi kesuksesan,
                                            </h6>
                                        </div>
                                        <h6>Masih ada kesempatan sekali lagi di gelombang berikutnya</h6>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-script'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.siswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ppdb-ponpes\resources\views/pages/santri/pengumuman/index.blade.php ENDPATH**/ ?>