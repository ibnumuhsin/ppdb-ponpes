@extends('layouts.siswa')

@section('title', $title)

@push('before-style')
@endpush

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Biodata Santri</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('santri.dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Biodata</li>
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
                            <h5 class="card-title font-weight-bold"><i class="fa fa-user-circle"></i>&nbsp;Biodata Santri
                            </h5>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table style="width: 100%">
                                    <tbody>
                                        <tr>
                                            <td width="20%">No. Pendaftaran</td>
                                            <td width="5%">:</td>
                                            <td>{{ $santri->no_pendaftaran }}</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">NISN</td>
                                            <td width="5%">:</td>
                                            <td>{{ $santri->nisn }}</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">NIK</td>
                                            <td width="5%">:</td>
                                            <td>{{ $santri->nik }}</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Nama Lengkap</td>
                                            <td width="5%">:</td>
                                            <td>{{ $santri->nama_lengkap }}</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Jenis Kelamin</td>
                                            <td width="5%">:</td>
                                            <td>{{ $santri->jenis_kelamin }}</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Tempat, Tanggal Lahir</td>
                                            <td width="5%">:</td>
                                            <td>{{ $santri->tmp_lahir }}, {{ $santri->tgl_lahir->format('d, M Y') }}</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Alamat</td>
                                            <td width="5%">:</td>
                                            <td>{{ $alamat == null ? '' : $alamat->alamat }}</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">No. Handphone</td>
                                            <td width="5%">:</td>
                                            <td>{{ $santri->no_telp }}</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Email</td>
                                            <td width="5%">:</td>
                                            <td>{{ $santri->email }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title font-weight-bold"><i class="fa fa-map"></i>&nbsp;Alamat Santri</h5>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="row d-flex justify-content-center">
                                        @if ($alamat == null)
                                            <div class="col-lg-6">
                                                <div class="alert alert-warning text-center" role="alert">
                                                    <h5 class="font-weight-bold">Data belum di lengkapi !</h5>
                                                </div>
                                            </div>
                                        @else
                                            <div class="col-lg-12">
                                                <div class="table-responsive">
                                                    <table style="width: 100%">
                                                        <tbody>
                                                            <tr>
                                                                <td>Provinsi</td>
                                                                <td>:</td>
                                                                <td>{{ $alamat == null ? '' : $alamat->Provinsi->name }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Kabupaten</td>
                                                                <td>:</td>
                                                                <td>{{ $alamat == null ? '' : $alamat->Kabupaten->name }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Kecamatan</td>
                                                                <td>:</td>
                                                                <td>{{ $alamat == null ? '' : $alamat->Kecamatan->name }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Desa / Kelurahan</td>
                                                                <td>:</td>
                                                                <td>{{ $alamat == null ? '' : $alamat->Kelurahan->name }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>RT / RW</td>
                                                                <td>:</td>
                                                                <td>{{ $alamat == null ? '' : $alamat->rt . ' / ' . $alamat->rw }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Alamat</td>
                                                                <td>:</td>
                                                                <td>{{ $alamat == null ? '' : $alamat->alamat }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        @endif
                                    </div>

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

                                    <div class="row d-flex justify-content-center">
                                        @if ($ortu == null)
                                            <div class="col-lg-6">
                                                <div class="alert alert-warning text-center" role="alert">
                                                    <h5 class="font-weight-bold">Data belum di lengkapi !</h5>
                                                </div>
                                            </div>
                                        @else
                                            <div class="col-lg-4">
                                                <div class="table-responsive">
                                                    <table style="width: 100%">
                                                        <tbody>
                                                            <tr>
                                                                <td>Nama Ayah</td>
                                                                <td>:</td>
                                                                <td>{{ $ortu == null ? '' : $ortu->nama_ayah }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pendidikan</td>
                                                                <td>:</td>
                                                                <td>{{ $ortu == null ? '' : $ortu->pendidikan_ayah }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pekerjaan</td>
                                                                <td>:</td>
                                                                <td>{{ $ortu == null ? '' : $ortu->pekerjaan_ayah }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Penghasilan</td>
                                                                <td>:</td>
                                                                <td>{{ $ortu == null ? '' : number_format($ortu->penghasilan_ortu, 0) }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>No Telephone</td>
                                                                <td>:</td>
                                                                <td>{{ $ortu == null ? '' : $ortu->no_telp_ortu }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="table-responsive">
                                                    <table style="width: 100%">
                                                        <tbody>
                                                            <tr>
                                                                <td>Nama Ibu</td>
                                                                <td>:</td>
                                                                <td>{{ $ortu == null ? '' : $ortu->nama_ibu }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pendidikan</td>
                                                                <td>:</td>
                                                                <td>{{ $ortu == null ? '' : $ortu->pendidikan_ibu }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pekerjaan</td>
                                                                <td>:</td>
                                                                <td>{{ $ortu == null ? '' : $ortu->pekerjaan_ibu }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="table-responsive">
                                                    <table style="width: 100%">
                                                        <tbody>
                                                            <tr>
                                                                <td>Nama Wali</td>
                                                                <td>:</td>
                                                                <td>{{ $ortu == null ? '' : $ortu->nama_wali }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pendidikan</td>
                                                                <td>:</td>
                                                                <td>{{ $ortu == null ? '' : $ortu->pendidikan_wali }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pekerjaan</td>
                                                                <td>:</td>
                                                                <td>{{ $ortu == null ? '' : $ortu->pekerjaan_wali }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Penghasilan</td>
                                                                <td>:</td>
                                                                <td>{{ $ortu == null ? '' : number_format($ortu->penghasilan_wali, 0) }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>No Telephone</td>
                                                                <td>:</td>
                                                                <td>{{ $ortu == null ? '' : $ortu->no_telp_wali }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        @endif
                                    </div>

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
                                    <div class="row d-flex justify-content-center">
                                        @if ($asal == null && $info == null)
                                            <div class="col-lg-6">
                                                <div class="alert alert-warning text-center" role="alert">
                                                    <h5 class="font-weight-bold">Data belum di lengkapi !</h5>
                                                </div>
                                            </div>
                                        @else
                                            <div class="col-lg-6">
                                                <div class="table-responsive">
                                                    <table style="width: 100%">
                                                        <tbody>
                                                            <tr>
                                                                <td width="30%">Asal Sekolah</td>
                                                                <td width="5%">:</td>
                                                                <td>{{ $asal == null ? '' : $asal->nama_sekolah }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td width="30%">Tahun Lulus</td>
                                                                <td width="5%">:</td>
                                                                <td>{{ $asal == null ? '' : $asal->thn_lulus }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="table-responsive">
                                                    <table style="width: 100%">
                                                        <tbody>
                                                            <tr>
                                                                <td width="30%">Minat dan Bakat</td>
                                                                <td width="5%">:</td>
                                                                <td>{{ $info == null ? '' : $info->minat_bakat }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td width="30%">Riwayat Penyakit</td>
                                                                <td width="5%">:</td>
                                                                <td>{{ $info == null ? '' : $info->riwayat_penyakit }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection

@push('after-script')
@endpush
