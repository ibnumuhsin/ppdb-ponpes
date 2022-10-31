

<?php $__env->startSection('title', $title); ?>

<?php $__env->startPush('before-style'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Biodata Santri</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard.index')); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.verifikasi.index')); ?>">Verifikasi</a></li>
                        <li class="breadcrumb-item active">Biodata Santri: <?php echo e($bio->nama_lengkap); ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="btn-group">
                                <a href="<?php echo e(route('admin.verifikasi.index')); ?>"
                                    class="btn btn-warning btn-sm font-weight-bold"><i
                                        class="fa fa-arrow-circle-left"></i>&nbsp;Kembali</a>
                            </div>

                            <div class="btn-group">
                                <a href="<?php echo e(route('admin.cetak_biodata.show', $bio->id)); ?>" class="btn btn-info btn-sm"><i class="fas fa-download"></i> Download Biodata</a>
                            </div>

                            <h6 class="font-weight-bold mt-4">No. Pendaftaran&nbsp;:&nbsp;<?php echo e($bio->no_pendaftaran); ?></h6>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title font-weight-bold"><i class="fa fa-user-circle"></i>&nbsp;Biodata Santri
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td width="25%">Nama Lengkap</td>
                                                <td width="5%">:</td>
                                                <td><?php echo e($bio->nama_lengkap); ?></td>
                                            </tr>
                                            <tr>
                                                <td width="25%">NISN</td>
                                                <td width="5%">:</td>
                                                <td><?php echo e($bio->nisn); ?></td>
                                            </tr>
                                            <tr>
                                                <td>NIK</td>
                                                <td width="5%">:</td>
                                                <td><?php echo e($bio->nik); ?></td>
                                            </tr>
                                            <tr>
                                                <td width="25%">Jenis Kelamin</td>
                                                <td width="5%">:</td>
                                                <td><?php echo e($bio->jenis_kelamin); ?></td>
                                            </tr>
                                            <tr>
                                                <td width="25%">Tempat, Tanggal Lahir</td>
                                                <td width="5%">:</td>
                                                <td><?php echo e($bio->tmp_lahir); ?>,&nbsp;<?php echo e($bio->tgl_lahir->format('d, M Y')); ?>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="25%">Email</td>
                                                <td width="5%">:</td>
                                                <td><?php echo e($bio->email); ?></td>
                                            </tr>
                                            <tr>
                                                <td width="25%">No Telephon</td>
                                                <td width="5%">:</td>
                                                <td><?php echo e($bio->no_telp); ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title font-weight-bold"><i class="fa fa-map"></i>&nbsp;Alamat Santri
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                     <?php if($alamat == null || empty($alamat)): ?>
                                        <div class="alert alert-warning" role="alert">
                                            <h6 class="text-center font-weight-bold">Data Alamat belum di
                                                lengkapi !</h6>
                                        </div>
                                    <?php else: ?>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td width="15%">Provinsi</td>
                                                        <td width="5%">:</td>
                                                        <td><?php echo e($alamat->Provinsi->name); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="15%">Provinsi</td>
                                                        <td width="5%">:</td>
                                                        <td><?php echo e($alamat->Kabupaten->name); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="15%">Provinsi</td>
                                                        <td width="5%">:</td>
                                                        <td><?php echo e($alamat->Kecamatan->name); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="15%">Kelurahan / Desa</td>
                                                        <td width="5%">:</td>
                                                        <td><?php echo e($alamat->Kelurahan->name); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="15%">Alamat</td>
                                                        <td width="5%">:</td>
                                                        <td><?php echo e($alamat->alamat); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="15%">RT</td>
                                                        <td width="5%">:</td>
                                                        <td><?php echo e($alamat->rt); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="15%">RW</td>
                                                        <td width="5%">:</td>
                                                        <td><?php echo e($alamat->rw); ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title font-weight-bold"><i class="fa fa-users"></i>&nbsp;Biodata Orangtua / Wali
                                Santri</h5>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-12">
                                    <?php if($ortu == null || empty($ortu)): ?>
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-lg-6">
                                                <div class="alert alert-warning" role="alert">
                                                    <h6 class="text-center font-weight-bold">Data Orang Tua belum di
                                                        lengkapi !</h6>
                                                </div>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td width="20%">Nama Ayah</td>
                                                        <td width="5%">:</td>
                                                        <td><?php echo e($ortu->nama_ayah); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="20%">Pendidikan Ayah</td>
                                                        <td width="5%">:</td>
                                                        <td><?php echo e($ortu->pendidikan_ayah); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="20%">Pekerjaan Ayah</td>
                                                        <td width="5%">:</td>
                                                        <td><?php echo e($ortu->pekerjaan_ayah); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="20%">Nama Ibu</td>
                                                        <td width="5%">:</td>
                                                        <td><?php echo e($ortu->nama_ibu); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="20%">Pendidikan Ibu</td>
                                                        <td width="5%">:</td>
                                                        <td><?php echo e($ortu->pendidikan_ibu); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="20%">Pekerjaan Ibu</td>
                                                        <td width="5%">:</td>
                                                        <td><?php echo e($ortu->pekerjaan_ibu); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="20%">No Telp Orangtua</td>
                                                        <td width="5%">:</td>
                                                        <td><?php echo e($ortu->no_telp_ortu); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="20%">Penghasilan Orangtua</td>
                                                        <td width="5%">:</td>
                                                        <td>Rp. <?php echo e(number_format($ortu->penghasilan_ortu, 0)); ?> /Bulan</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="20%">Nama Wali</td>
                                                        <td width="5%">:</td>
                                                        <td><?php echo e($ortu->nama_wali); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="20%">Pendidikan Wali</td>
                                                        <td width="5%">:</td>
                                                        <td><?php echo e($ortu->pendidikan_wali); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="20%">Pekerjaan Wali</td>
                                                        <td width="5%">:</td>
                                                        <td><?php echo e($ortu->pekerjaan_wali); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="20%">No Telp Wali</td>
                                                        <td width="5%">:</td>
                                                        <td><?php echo e($ortu->no_telp_wali); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="20%">Penghasilan Wali</td>
                                                        <td width="5%">:</td>
                                                        <td>Rp. <?php echo e(number_format($ortu->penghasilan_wali, 0)); ?> /Bulan</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title font-weight-bold">Riwayat Sekolah dan Informasi Tambahan</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <?php if($sekolah == null || empty($sekolah)): ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <h6 class="text-center font-weight-bold">Data Riwayat Sekolah belum di
                                                        lengkapi !</h6>
                                                </div>
                                            <?php else: ?>
                                                <h6 class="font-weight-bold">Riwayat Sekolah</h6>
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td width="30%">Asal Sekolah</td>
                                                            <td width="5%">:</td>
                                                            <td><?php echo e($sekolah->nama_sekolah); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="30%">Tahun Lulus</td>
                                                            <td width="5%">:</td>
                                                            <td><?php echo e($sekolah->thn_lulus); ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-lg-6">
                                            <?php if($info == null || empty($info)): ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <h6 class="text-center font-weight-bold">Data Informasi Tambahan belum
                                                        di
                                                        lengkapi !</h6>
                                                </div>
                                            <?php else: ?>
                                                <div class="row">
                                                    <h6 class="font-weight-bold">Informasi Tambahan</h6>
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td width="30%">Minat dan Bakat</td>
                                                                <td width="5%">:</td>
                                                                <td><?php echo e($info->minat_bakat); ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="30%">Riwayat Penyakit</td>
                                                                <td width="5%">:</td>
                                                                <td><?php echo e($info->riwayat_penyakit); ?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title font-weight-bold">Dokumen</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php if($dokumen == null || empty($dokumen)): ?>
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-lg-6">
                                                <div class="alert alert-warning" role="alert">
                                                    <h6 class="text-center font-weight-bold">Data Dokumen belum di lengkapi
                                                        !</h6>
                                                </div>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="text-center">
                                                    <tr>
                                                        <th>Jenis Dokumen</th>
                                                        <th>Dokumen</th>
                                                        <th>Download</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-center">
                                                    <tr>
                                                        <td width="20%">Foto Santri</td>
                                                        <td width="80%"><img src="<?php echo e(Storage::url($dokumen->foto)); ?>"
                                                                alt="" class="img-fluid rounded"
                                                                style="width: 50%">
                                                        </td>
                                                        <td width="20%">
                                                            <a href="<?php echo e(route('admin.download.foto', $dokumen->id)); ?>"
                                                                class="btn btn-sm btn-primary"><i
                                                                    class="fa fa-download"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="20%">Kartu Keluarga</td>
                                                        <td width="80%"><img src="<?php echo e(Storage::url($dokumen->kk)); ?>"
                                                                alt="" class="img-fluid rounded"
                                                                style="width: 50%">
                                                        </td>
                                                        <td width="20%">
                                                            <a href="<?php echo e(route('admin.download.kk', $dokumen->id)); ?>"
                                                                class="btn btn-sm btn-primary"><i
                                                                    class="fa fa-download"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="20%">KTP Ayah</td>
                                                        <td width="80%"><img
                                                                src="<?php echo e(Storage::url($dokumen->ktp_ayah)); ?>"
                                                                alt="" class="img-fluid rounded"
                                                                style="width: 50%">
                                                        </td>
                                                        <td width="20%">
                                                            <a href="<?php echo e(route('admin.download.ktp_ayah', $dokumen->id)); ?>"
                                                                class="btn btn-sm btn-primary"><i
                                                                    class="fa fa-download"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="20%">KTP Ibu</td>
                                                        <td width="80%"><img
                                                                src="<?php echo e(Storage::url($dokumen->ktp_ibu)); ?>"
                                                                alt="" class="img-fluid rounded"
                                                                style="width: 50%">
                                                        </td>
                                                        <td width="20%">
                                                            <a href="<?php echo e(route('admin.download.ktp_ibu', $dokumen->id)); ?>"
                                                                class="btn btn-sm btn-primary"><i
                                                                    class="fa fa-download"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="20%">SKTL/SKHUN/Ijazah</td>
                                                        <td width="80%"><img src="<?php echo e(Storage::url($dokumen->skl)); ?>"
                                                                alt="" class="img-fluid rounded"
                                                                style="width: 50%">
                                                        </td>
                                                        <td width="20%">
                                                            <a href="<?php echo e(route('admin.download.sktl', $dokumen->id)); ?>"
                                                                class="btn btn-sm btn-primary"><i
                                                                    class="fa fa-download"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="20%">Akta Kelahiran</td>
                                                        <td width="80%"><img
                                                                src="<?php echo e(Storage::url($dokumen->akta_kelahiran)); ?>"
                                                                alt="" class="img-fluid rounded"
                                                                style="width: 50%">
                                                        </td>
                                                        <td width="20%">
                                                            <a href="<?php echo e(route('admin.download.akta', $dokumen->id)); ?>"
                                                                class="btn btn-sm btn-primary"><i
                                                                    class="fa fa-download"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>


<?php $__env->stopSection(); ?>
<?php $__env->startPush('after-script'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ppdb-ponpes\resources\views/pages/admin/verifikasi/bio.blade.php ENDPATH**/ ?>