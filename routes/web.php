<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Landing\BiayaController;
use App\Http\Controllers\Landing\LoginController;
use App\Http\Controllers\Santri\AlamatController;
use App\Http\Controllers\Santri\BiodataController;
use App\Http\Controllers\Santri\DokumenController;

use App\Http\Controllers\Landing\LandingController;
use App\Http\Controllers\Landing\ProfileController;
use App\Http\Controllers\Santri\OrangTuaController;
use App\Http\Controllers\Landing\RegisterController;
use App\Http\Controllers\Santri\DashboardController;
use App\Http\Controllers\Santri\MyProfileController;
use App\Http\Controllers\Santri\PengumumanController;
use App\Http\Controllers\Santri\AsalSekolahController;
use App\Http\Controllers\Santri\Print\PrintBuktiController;
use App\Http\Controllers\Santri\InformasiTambahanController;
use App\Http\Controllers\Santri\Print\PrintBiodataController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::resource('/', LandingController::class);
Route::get('/brosur', [LandingController::class, 'brosur'])->name('brosur.dwonload');
Route::resource('biaya', BiayaController::class);
Route::resource('profile', ProfileController::class);
Route::resource('pendaftaran', RegisterController::class);
Route::resource('masuk', LoginController::class);

     Route::group(['prefix'  =>  'santri', 'as'   =>  'santri.'], function(){

        Route::middleware(['auth','EnsureUserRole:2', 'verified'])->group(function(){

            Route::resource('dashboard', DashboardController::class);
            Route::resource('asal_sekolah', AsalSekolahController::class);
            Route::resource('biodata', BiodataController::class);

            Route::get('biodata_santri', [BiodataController::class, 'biodata_santri'])->name('biodata.santri');

            Route::resource('orang_tua', OrangTuaController::class);
            Route::resource('alamat', AlamatController::class);
            Route::resource('dokumen', DokumenController::class);
            Route::resource('info_tambahan', InformasiTambahanController::class);
            Route::resource('alamat_santri', AlamatController::class);

            Route::resource('pengumuman', PengumumanController::class);

            Route::resource('cetak_bukti_kelulusan', PrintBuktiController::class)->only(['index']);

            Route::resource('cetak_biodata', PrintBiodataController::class)->only(['show']);

            Route::resource('my_profile', MyProfileController::class);

            Route::post('provinsi', [AlamatController::class, 'provinsi'])->name('get.provinsi');
            Route::post('kabupaten/{id}', [AlamatController::class, 'kabupaten'])->name('get.kabupaten');
            Route::post('kecamatan/{id}', [AlamatController::class, 'kecamatan'])->name('get.kecamatan');
            Route::post('desa/{id}', [AlamatController::class, 'desa'])->name('get.desa');

        });

     });

require __DIR__.'/auth.php';
