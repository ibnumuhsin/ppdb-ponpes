<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e($title); ?> | PPDB PonPes Bahrul Maghfiroh</title>

</head>

<style>
    .center {
        text-align: center;
    }

    .header.top {
        border-top: solid 2px black;
    }

    .body {
        text-align: justify
    }
</style>

<body>
    <table width="100%">
        <tbody>
            <tr>
                <th width="15%"><img src="<?php echo e(asset('storage/' . Str::substr($bukti->logo_yayasan, 7))); ?>" alt=""
                        width="100%">
                <th width="70%"> <?php echo $bukti->header; ?></th>
                </th>
                <th><img src="<?php echo e(asset('storage/' . Str::substr($bukti->logo_ponpes, 7))); ?>" alt=""
                        width="100%"></th>
            </tr>
        </tbody>
    </table>
    <span class="center">
        <?php echo $bukti->alamat; ?>

        <?php echo $bukti->judul; ?>

    </span>

    <div class="body">
        <?php echo $bukti->body_1; ?>

        <table style="margin-left: 50px;">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo e(Auth::User()->nama_lengkap); ?></td>
            </tr>
            <tr>
                <td>No. Pendaftaran</td>
                <td>:</td>
                <td><?php echo e(Auth::User()->no_pendaftaran); ?></td>
            </tr>
        </table>
        <p>Dinyatakan <span>
                <?php if(Auth::user()->status_kelulusan == 1): ?>
                    <span style="font-weight:bold;">LULUS/DITERIMA</span>
                <?php elseif(Auth::user()->status_kelulusan == 2): ?>
                    <span style="font-weight:bold;">TIDAK LULUS/TIDAK DITERIMA</span>
                <?php endif; ?>
            </span> sebagai santri baru tahun ajaran <?php echo e($bukti->thn_ajaran); ?>.</p>
        <?php echo $bukti->body_2; ?>

    </div>
    <section>
        <div style="margin-left: 450px">
            <p><?php echo e($bukti->tempat); ?>, <?php echo e($bukti->tanggal->format('d, M Y')); ?></p>
            <p><?php echo e($bukti->jabatan_panitia); ?></p>
            <img src="<?php echo e(asset('storage/' . Str::substr($bukti->ttd_stample_panitia, 7))); ?>" alt=""
                width="35%">
            <p style="font-weight: bold"><?php echo e($bukti->nama_panitia); ?></p>
        </div>
    </section>
</body>


</html>
<?php /**PATH C:\laragon\www\ppdb-ponpes\resources\views/pages/santri/print/bukti.blade.php ENDPATH**/ ?>