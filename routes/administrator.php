<?php

use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
    use App\Http\Controllers\Admin\Auth\ConfirmablePasswordController;
    use App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController;
    use App\Http\Controllers\Admin\Auth\EmailVerificationPromptController;
    use App\Http\Controllers\Admin\Auth\NewPasswordController;
    use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
    use App\Http\Controllers\Admin\Auth\RegisteredUserController;
    use App\Http\Controllers\Admin\Auth\VerifyEmailController;

    use App\Http\Controllers\Admin\Website\BiografiPendiriController;
    use App\Http\Controllers\Admin\Website\BiayaPendidikanController;
    use App\Http\Controllers\Admin\Website\VisiMisiController;
    use App\Http\Controllers\Admin\Website\AlurController;
    use App\Http\Controllers\Admin\Website\BrosurController;
    use App\Http\Controllers\Admin\Website\FasilitasController;
    use App\Http\Controllers\Admin\Website\ExtraKulikulerController;
    use App\Http\Controllers\Admin\Website\SyaratDaftarController;

    use App\Http\Controllers\Admin\DashboardController;
    use App\Http\Controllers\Admin\Status\KetLulusController;
    use App\Http\Controllers\Admin\Status\MateriTestController;
    use App\Http\Controllers\Admin\User\SiswaController;
    use App\Http\Controllers\Admin\User\AdminController;
    use App\Http\Controllers\Admin\Status\VerifikasiController;
    use App\Http\Controllers\Admin\Status\LolosController;
    use App\Http\Controllers\Admin\Profile\ProfileController;
    use App\Http\Controllers\Admin\BuktiKelulusan\BuktiKelulusanController;
    use App\Http\Controllers\Admin\Print\PrintBuktiController;
    use App\Http\Controllers\Admin\Print\PrintBiodataController;





    Route::group(['prefix'  =>  'admin', 'as'   =>  'admin.'], function(){

        Route::middleware(['auth','EnsureUserRole:1', 'verified'])->group(function(){

            Route::resource('biografi_pendiri', BiografiPendiriController::class);
            Route::resource('biaya_pendidikan', BiayaPendidikanController::class);
            Route::resource('visi_misi', VisiMisiController::class);
            Route::resource('alur', AlurController::class);
            Route::resource('brosur', BrosurController::class);
            Route::resource('fasilitas', FasilitasController::class);
            Route::resource('extra_kulikuler', ExtraKulikulerController::class);
            Route::resource('syarat_daftar', SyaratDaftarController::class);

            Route::resource('dashboard', DashboardController::class)->only(['index', 'update']);
            Route::resource('siswa', SiswaController::class);
            Route::resource('admin', AdminController::class);

            Route::resource('verifikasi', VerifikasiController::class);


            Route::resource('kelulusan', LolosController::class);
            Route::get('status_lulus', [LolosController::class, 'lulus'])->name('status.lulus');
            Route::get('status_tidak_lulus', [LolosController::class, 'tdk_lulus'])->name('tidak.lulus');


            Route::resource('keterangan', KetLulusController::class);
            Route::resource('materi_test', MateriTestController::class);

            Route::get('download_foto/{id}', [VerifikasiController::class, 'download_foto'])->name('download.foto');
            Route::get('download_kk/{id}', [VerifikasiController::class, 'download_kk'])->name('download.kk');
            Route::get('download_ktp_ayah/{id}', [VerifikasiController::class, 'download_ktp_ayah'])->name('download.ktp_ayah');
            Route::get('download_ktp_ibu/{id}', [VerifikasiController::class, 'download_ktp_ibu'])->name('download.ktp_ibu');
            Route::get('download_sktl/{id}', [VerifikasiController::class, 'download_sktl'])->name('download.sktl');
            Route::get('download_akta/{id}', [VerifikasiController::class, 'download_akta'])->name('download.akta');

            Route::resource('my_profile', ProfileController::class)->only(['index', 'update']);

            Route::resource('bukti_kelulusan', BuktiKelulusanController::class);

            Route::resource('cetak_bukti_kelulusan', PrintBuktiController::class);

            Route::resource('cetak_biodata', PrintBiodataController::class);

        });


    Route::middleware('guest')->group(function () {

        // Route::get('register',
        //     [RegisteredUserController::class, 'create']
        // )
        //     ->name('register');

        // Route::post('register', [RegisteredUserController::class, 'store']);

        Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

        Route::post('login', [AuthenticatedSessionController::class, 'store']);

        // Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        //     ->name('password.request');

        // Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        //     ->name('password.email');

        // Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        //     ->name('password.reset');

        // Route::post('reset-password', [NewPasswordController::class, 'store'])
        // ->name('password.update');
    });

    Route::middleware('auth')->group(function () {
        // Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
        // ->name('verification.notice');

        // Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        // ->middleware(['signed', 'throttle:6,1'])
        // ->name('verification.verify');

        // Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        // ->middleware('throttle:6,1')
        // ->name('verification.send');

        // Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        //     ->name('password.confirm');

        // Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

        Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
    });


    });

?>
