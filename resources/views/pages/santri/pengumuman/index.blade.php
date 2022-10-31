@extends('layouts.siswa')

@section('title', $title)

@push('before-style')
@endpush

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pengumuman</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('santri.dashboard.index') }}">Dashboard</a></li>
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
                            @if ($info->status_verifikasi == 2)
                                <div class="alert alert-info">
                                    <h4 class="text-center"><i class="icon fas fa-ban"></i> Informasi</h4>
                                    <h6 class="text-center">Maaf, pendafataran anda belum diverifikasi. Silahkan
                                        lengkapi biodata anda dan tunggu konfirmasi.</h6>
                                </div>
                            @elseif ($info->status_verifikasi == 1 && $info->status_kelulusan == 0)
                                <div class="alert alert-success">
                                    <h4 class="text-center"><i class="icon fas fa-check"></i> Informasi</h4>
                                    <h6 class="text-center">Selamat, pendaftaran anda telah Terverifikasi.</h6>
                                </div>

                                <div class="card">
                                    <div class="card-header bg-info">
                                        <h5 class="card-title font-weight-bold">Jadwal dan Materi Test</h5>
                                    </div>
                                    <div class="card-body">
                                        @if ($mt == null || empty($mt))
                                            <h6 class="font-weight-bold text-center text-danger">Data kosong.... !</h6>
                                        @else
                                            <p>{!! $mt->materi_test !!}</p>
                                        @endif
                                    </div>
                                </div>
                            @elseif ($info->status_kelulusan == 1 && $info->status_verifikasi == 1)
                                <div class="card">
                                    <div class="card-header bg-info">
                                        <h5 class="card-title font-weight-bold">Selamat, anda dinyatakan lulus</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="alert alert-success" role="alert">
                                            <h6 class="text-center">
                                                Selamat {{ Auth::user()->nama_lengkap }}, anda <span
                                                    class="font-weight-bold">DITERIMA</span> sebagai Santri Baru di Pondok
                                                Pesantren Bahrul Maghfiroh Bintaro, Silahkan Cetak surat pengumuman bukti
                                                kelulusan seleksi.
                                            </h6>
                                        </div>

                                        <div class="row d-flex justify-content-center">
                                            <div class="col-lg-4">
                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <a href="{{ route('santri.cetak_bukti_kelulusan.index') }}"
                                                            class="text-decoration-none text-dark">
                                                            <i class="fa fa-print fa-7x"></i>
                                                            <h6 class="font-weight-bold m-3">Cetak Bukti Kelulusan</h6>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @if (($lulus != null) | !empty($lulus))
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="font-weight-bold">Keterangan</h5>
                                                    <p>{!! $lulus->keterangan !!}</p>
                                                </div>
                                            </div>
                                        @endif

                                    </div>
                                </div>
                            @elseif ($info->status_kelulusan == 2 && $info->status_verifikasi == 1)
                                <div class="card">
                                    <div class="card-header bg-info">
                                        <h5 class="card-title font-weight-bold">Mohon Maaf, kamu belum beruntung</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="alert alert-danger" role="alert">
                                            <h6 class="text-center">
                                                Mohon Maaf {{ Auth::user()->nama_lengkap }}, kamu <span
                                                    class="font-weight-bold">Belum memenuhi kriteria</span> sebagai Santri Baru di
                                                Pondok
                                                Pesantren Bahrul Maghfiroh Bintaro,
                                                Jangan berhenti berusaha dan tetap semangat semoga selalu diberi kesuksesan,
                                            </h6>
                                        </div>
                                        <h6>Masih ada kesempatan sekali lagi di gelombang berikutnya</h6>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@push('after-script')
@endpush
