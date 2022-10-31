@extends('layouts.siswa')

@section('title', $title)

@push('before-style')

@endpush

    @section('content')

         <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Lengkapi Biodata Santri</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('santri.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Lengkapi Biodata</li>
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
                            <h5 class="card-title font-weight-bold">Identitas Santri</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="{{ route('santri.biodata.update', Auth::user()->id ) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="form-group">
                                            <label for="nama">Nama Lengkap :</label>
                                            <input type="text" name="nama_lengkap" class="form-control" value="{{ Auth::user()->nama_lengkap }}">
                                            @error('nama_lengkap')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="nisn">NISN :</label>
                                                <input type="number" name="nisn" class="form-control" value="{{ Auth::user()->nisn }}">
                                                @error('nisn')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="nik">NIK :</label>
                                                <input type="number" name="nik" class="form-control" value="{{ Auth::user()->nik }}">
                                                @error('nik')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="jekel">Jenis Kelamin :</label>
                                                    <select name="jenis_kelamin" id="jekel" class="form-control">
                                                        <option selected disabled>-- Pilih Jenis Kelamin --</option>
                                                        <option value="L" {{ Auth::user()->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki - Laki</option>
                                                        <option value="P" {{ Auth::user()->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                                                    </select>
                                                    @error('jenis_kelamin')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="tmp_lahir">Tempat Lahir :</label>
                                                    <input type="text" name="tmp_lahir" class="form-control" value="{{ Auth::user()->tmp_lahir }}">
                                                    @error('tmp_lahir')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="tgl_lahir">Tanggal Lahir :</label>
                                                    <input type="date" name="tgl_lahir" class="form-control" value="{{ Str::substr(Auth::user()->tgl_lahir, 0, -9) }}">
                                                    @error('tgl_lahir')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title font-weight-bold">Alamat Santri</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">

                                    @if($alamat == null || empty($alamat))

                                    <form action="{{ route('santri.alamat_santri.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')

                                    @else

                                       <form action="{{ route('santri.alamat_santri.update', $alamat->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                    @endif

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="provinsi">Provinsi</label>
                                                    <select name="id_provinsi" id="provinsi" class="provinsi form-control">
                                                        <option  selected="selected" disabled>-- Pilih Provinsi --</option>
                                                    </select>
                                                    @error('id_provinsi')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="kabupaten">Kabupaten</label>
                                                    <select name="id_kabupaten" id="kabupaten" class="kabupaten form-control">
                                                         <option  selected="selected" disabled>-- Pilih Kabupaten --</option>
                                                    </select>
                                                    @error('id_kabupaten')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="kecamatan">Kecamatan</label>
                                                    <select name="id_kecamatan" id="kecamatan" class="kecamatan form-control">
                                                            <option  selected="selected" disabled>-- Pilih Kecamatan --</option>
                                                    </select>
                                                    @error('id_kecamatan')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="desa">Desa / Kelurahan</label>
                                                    <select name="id_kelurahan" id="desa" class="desa form-control">
                                                            <option  selected="selected" disabled>-- Pilih Desa / Kelurahan --</option>
                                                    </select>
                                                    @error('id_kelurahan')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="rt">Rt</label>
                                                                    <input type="number" name="rt" id="rt" class="form-control" value="{{ $alamat == null ? old('rt') : $alamat->rt }}">
                                                                    @error('rt')
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="rw">Rw</label>
                                                                    <input type="number" name="rw" id="rw" class="form-control" value="{{ $alamat == null ? old('rw') : $alamat->rw }}">
                                                                    @error('rw')
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="alamat">Alamat</label>
                                                    <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control">{{ $alamat == null ? old('alamat') : $alamat->alamat }}</textarea>
                                                    @error('alamat')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title font-weight-bold">Orang Tua / Wali Santri</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="col-lg-12">

                                    @if(empty($ortu) || $ortu == null)

                                    <form action="{{ route('santri.orang_tua.store') }}" method="POST" enctype="multipart/form-data">
                                       @csrf
                                       @method('POST')

                                    @else

                                    <form action="{{ route('santri.orang_tua.update', $ortu->id) }}" method="POST" enctype="multipart/form-data">
                                       @csrf
                                       @method('PUT')

                                    @endif


                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="nama_ayah">Nama Lengkap Ayah</label>
                                                    <input type="text" name="nama_ayah" id="nama_ayah" class="form-control" value="{{ $ortu == null ? old('nama_ayah') : $ortu->nama_ayah }}">
                                                    @error('nama_ayah')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="row">

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                     <label for="pendidikan_ayah">Pendidikan Ayah</label>
                                                                     <input type="text" name="pendidikan_ayah" id="pendidikan_ayah" value="{{ $ortu == null ? old('pendidikan_ayah') : $ortu->pendidikan_ayah }}" class="form-control">
                                                                     @error('pendidikan_ayah')
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                                                                    <input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" value="{{ $ortu == null ? old('pekerjaan_ayah') : $ortu->pekerjaan_ayah }}" class="form-control">
                                                                     @error('penghasilan_ayah')
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="nama_ibu">Nama Lengkap Ibu</label>
                                                    <input type="text" name="nama_ibu" id="nama_ibu" class="form-control" value="{{ $ortu == null ? old('nama_ibu') : $ortu->nama_ibu }}">
                                                    @error('nama_ibu')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="row">

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                     <label for="pendidikan_ibu">Pendidikan Ibu</label>
                                                                     <input type="text" name="pendidikan_ibu" id="pendidikan_ibu" value="{{ $ortu == null ? old('pendidikan_ibu') : $ortu->pendidikan_ibu }}" class="form-control">
                                                                    @error('pendidikan_ibu')
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                                                                    <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" value="{{ $ortu == null ? old('pekerjaan_ibu') : $ortu->pekerjaan_ibu }}" class="form-control">
                                                                    @error('pekerjaan_ibu')
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="no_telp_ortu">No Telephon Orang Tua <small class="text-danger">( *Salah Satu )</small></label>
                                                    <input type="number" name="no_telp_ortu" id="no_telp_ortu" class="form-control" value="{{ $ortu == null ? old('no_telp_ortu') : $ortu->no_telp_ortu }}">
                                                    @error('no_telp_ortu')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="penghasilan_ortu">Penghasilan Orang Tua <small class="text-danger">( *Per Bulan )</small></label>
                                                    <input type="number" name="penghasilan_ortu" id="penghasilan_ortu" class="form-control" value="{{ $ortu == null ? old('penghasilan_ortu') : $ortu->penghasilan_ortu }}">
                                                    @error('penghasilan_ortu')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="nama_wali">Nama Lengkap Wali</label>
                                                    <input type="text" name="nama_wali" id="nama_wali" class="form-control" value="{{$ortu == null ? old('nama_wali') : $ortu->nama_wali }}">
                                                    @error('nama_wali')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">

                                                    <div class="col-lg-12">
                                                        <div class="row">

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                     <label for="pendidikan_wali">Pendidikan Wali</label>
                                                                     <input type="text" name="pendidikan_wali" id="pendidikan_wali" value="{{ $ortu == null ? old('pendidikan_wali') : $ortu->pendidikan_wali }}" class="form-control">
                                                                       @error('pendidikan_wali')
                                                                            <small class="text-danger">{{ $message }}</small>
                                                                        @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="pekerjaan_wali">Pekerjaan Wali</label>
                                                                    <input type="text" name="pekerjaan_wali" id="pekerjaan_wali" value="{{ $ortu == null ? old('pekerjaan_wali') : $ortu->pekerjaan_wali }}" class="form-control">
                                                                       @error('pekerjaan_wali')
                                                                            <small class="text-danger">{{ $message }}</small>
                                                                        @enderror
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="no_telp_wali">No Telephon Wali <small class="text-danger">( *Salah Satu )</small></label>
                                                    <input type="number" name="no_telp_wali" id="no_telp_wali" class="form-control" value="{{ $ortu == null ? old('no_telp_wali') : $ortu->no_telp_wali }}">
                                                    @error('no_telp_wali')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="penghasilan_wali">Penghasilan wali <small class="text-danger">( *Per Bulan )</small></label>
                                                    <input type="number" name="penghasilan_wali" id="penghasilan_wali" class="form-control" value="{{ $ortu == null ? old('penghasilan_wali')  : $ortu->penghasilan_wali }}">
                                                    @error('penghasilan_wali')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                          <div class="form-group">
                                            <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                                        </div>


                                     </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title font-weight-bold">Asal Sekolah</h5>
                        </div>
                        <div class="card-body">

                            @if (empty($asal) || $asal == null)

                            <form action="{{ route('santri.asal_sekolah.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('POST')

                            @else


                            <form action="{{ route('santri.asal_sekolah.update', $asal->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                            @endif


                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="nama_sekolah">Nama Asal Sekolah</label>
                                                    <input type="text" name="nama_sekolah" id="asal_sekolah" class="form-control" value="{{ $asal == null ? old('nama_sekolah') : $asal->nama_sekolah }}">
                                                    @error('nama_sekolah')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="thn_lulus">Tahun Lulus</label>
                                                    <select name="thn_lulus" id="thn_lulus" class="form-control">
                                                        <option selected disabled>-- Pilih Tahun Lulus --</option>
                                                        @php
                                                           $now = date('Y');

                                                           for($i = $now; $i >= 2000; $i--){

                                                            if(empty($asal) || $asal == null){

                                                            echo '<option value="'.$i.'">'.$i.'</option>';

                                                            } elseif($asal->thn_lulus == $i){

                                                                echo "<option value='$i' selected >$i</option>";
                                                            } else {
                                                                echo '<option value="'.$i.'">'.$i.'</option>';

                                                            }

                                                           }

                                                        @endphp
                                                    </select>
                                                    @error('thn_lulus')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                                        </div>

                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title font-weight-bold">Informasi Tambahan</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    @if (empty($info) || $info == null)

                                    <form action="{{ route('santri.info_tambahan.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')

                                    @else

                                    <form action="{{ route('santri.info_tambahan.update', $info->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                    @endif

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="minat_bakat">Minat dan Bakat <small class="text-danger">*Optional</small></label>
                                                    <input type="text" name="minat_bakat" id="minat_bakat" class="form-control" value="{{ $info == null ? old('minat_bakat') : $info->minat_bakat }}">
                                                    @error('minat_bakat')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="riwayat_penyakit">Riwayat Penyakit <small class="text-danger">*Optional</small></label>
                                                    <input type="text" name="riwayat_penyakit" id="riwayat_penyakit" class="form-control" value="{{ $info == null ? old('riwayat_penyakit') : $info->riwayat_penyakit }}">
                                                    @error('riwayat_penyakit')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title font-weight-bold">Upload Dokumen</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">

                                    @if (empty($dokumen) ||$dokumen == null )

                                    <form action="{{ route('santri.dokumen.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')

                                    @else

                                    <form action="{{ route('santri.dokumen.update', $dokumen->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                    @endif


                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="foto">Foto Santri <small class="text-danger">*Wajib | Background Biru | Ukuran 3x4 | Format: Jpg, Png, Jpeg</small></label>
                                                    @if (!empty($dokumen->foto))
                                                        <br>
                                                        <img src="{{ Storage::url($dokumen->foto) }}" class="img-fluid rounded m-3" alt="foto" style="width: 50%">
                                                    @endif
                                                    <input type="file" name="foto" id="foto" class="form-control">
                                                    @error('foto')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="kk">Kartu Keluarga <small class="text-danger">*Wajib | Format: Jpg, Jpeg,Png</small></label>
                                                    @if (!empty($dokumen->kk))
                                                        <br>
                                                        <img src="{{ Storage::url($dokumen->kk) }}" class="img-fluid rounded m-3" alt="foto" style="width: 50%">
                                                    @endif
                                                    <input type="file" name="kk" class="form-control" id="kk">
                                                    @error('kk')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="ktp_ayah">KTP Ayah <small class="text-danger">*Wajib | Format: Jpg, Png, Jpeg</small></label>
                                                    @if (!empty($dokumen->ktp_ayah))
                                                        <br>
                                                        <img src="{{ Storage::url($dokumen->ktp_ayah) }}" class="img-fluid rounded m-3" alt="foto" style="width: 50%">
                                                    @endif
                                                    <input type="file" name="ktp_ayah" id="ktp_ayah" class="form-control">
                                                    @error('ktp_ayah')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="ktp_ibu">KTP Ibu <small class="text-danger">*Wajib | Format: Jpg, Jpeg,Png</small></label>
                                                    @if (!empty($dokumen->ktp_ibu))
                                                        <br>
                                                        <img src="{{ Storage::url($dokumen->ktp_ibu) }}" class="img-fluid rounded m-3" alt="foto" style="width: 50%">
                                                    @endif
                                                    <input type="file" name="ktp_ibu" class="form-control" id="ktp_ibu">
                                                    @error('ktp_ibu')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="skl">SKTL / SKHUN / Ijazah<small class="text-danger">*Wajib | Salahsatu | Format: Jpg, Png, Jpeg</small></label>
                                                     @if (!empty($dokumen->skl))
                                                        <br>
                                                        <img src="{{ Storage::url($dokumen->skl) }}" class="img-fluid rounded m-3" alt="foto" style="width: 50%">
                                                    @endif
                                                    <input type="file" name="skl" id="skl" class="form-control">
                                                    @error('skl')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="akta_kelahiran">Akta Kelahiran <small class="text-danger">*Wajib | Format: Jpg, Jpeg,Png</small></label>
                                                     @if (!empty($dokumen->akta_kelahiran))
                                                        <br>
                                                        <img src="{{ Storage::url($dokumen->akta_kelahiran) }}" class="img-fluid rounded m-3" alt="foto" style="width: 50%">
                                                    @endif
                                                    <input type="file" name="akta_kelahiran" class="form-control" id="akta_kelahiran">
                                                    @error('akta_kelahiran')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                                        </div>


                                    </form>

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

    <script>
  $(document).ready(function() {


       $('#provinsi').select2({
            ajax: {
                url: '{{ route('santri.get.provinsi') }}',
                type: 'post',
                dataType: 'json',
                delay: 250,
                data: function(params){
                    return {
                        _token: '{{ csrf_token() }}',
                        search: params.term
                    }
                },
                processResults: function(response){
                    return {
                        results: response
                    }
                },
                cache: true
            },

        });

    });

    var prov = '{{ $alamat == null ? '' : $alamat->id_provinsi }}';
    var selectOption = new Option('{{ $alamat == null ? '-- Pilih Provinsi --' : $alamat->Provinsi->name     }}', prov, true, true);
    $('#provinsi').append(selectOption).trigger('change');


  $('#provinsi').change(function() {
        let id = $(this).val();
        $("#kabupaten").empty();
        $("#kecamatan").empty();
        $("#desa").empty();
        $('#kabupaten').select2({
            ajax: {
                url: '{{ route('santri.get.kabupaten', ':id') }}'.replace(':id', id),
                type: 'post',
                dataType: 'json',
                delay: 250,
                data: function(params){
                    return {
                        _token: '{{ csrf_token() }}',
                        search: params.term
                    }
                },
                processResults: function(response){
                    return {
                        results: response
                    }
                },
                cache: true
            }
        });
  });

    var prov = '{{ $alamat == null ? '' : $alamat->id_kabupaten }}';
    var selectOption = new Option('{{ $alamat == null ? '-- Pilih Kabupaten --' : $alamat->Kabupaten->name     }}', prov, true, true);
    $('#kabupaten').append(selectOption).trigger('change');

  $('#kabupaten').change(function() {
        let id = $(this).val();
        $('#kecamatan').select2({
            ajax: {
                url: '{{ route('santri.get.kecamatan', ':id') }}'.replace(':id', id),
                type: 'post',
                dataType: 'json',
                delay: 250,
                data: function(params){
                    return {
                        _token: '{{ csrf_token() }}',
                        search: params.term
                    }
                },
                processResults: function(response){
                    return {
                        results: response
                    }
                },
                cache: true
            }
        });
  });

    var prov = '{{ $alamat == null ? '' : $alamat->id_kecamatan }}';
    var selectOption = new Option('{{ $alamat == null ? '-- Pilih Kecamatan --' : $alamat->Kecamatan->name     }}', prov, true, true);
    $('#kecamatan').append(selectOption).trigger('change');

  $('#kecamatan').change(function() {
        let id = $(this).val();
        $('#desa').select2({
            ajax: {
                url: '{{ route('santri.get.desa', ':id') }}'.replace(':id', id),
                type: 'post',
                dataType: 'json',
                delay: 250,
                 data: function(params){
                    return {
                        _token: '{{ csrf_token() }}',
                        search: params.term
                    }
                },
                processResults: function(response){
                    return {
                        results: response
                    }
                },
                cache: true
            }
        });
  });

    var prov = '{{ $alamat == null ? '' : $alamat->id_kelurahan }}';
    var selectOption = new Option('{{ $alamat == null ? '-- Pilih Kelurahan --' : $alamat->Kelurahan->name     }}', prov, true, true);
    $('#desa').append(selectOption).trigger('change');



        // $.ajax({
        //     url: `http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json`,
        //     method: 'GET',
        //     success: function(data) {
        //         console.log(data);
        //         let option = '<option selected disabled>Pilih Provinsi</option>';
        //         data.forEach(item => {
        //             option += `<option value="${item.id}">${item.name}</option>`;
        //         });
        //         $('#provinsi').html(option);
        //     }
        // });

    // $('#provinsi').on('change', function() {
    //     let id = $(this).val();
    //     $.ajax({
    //         url: `http://www.emsifa.com/api-wilayah-indonesia/api/regencies/${id}.json`,
    //         method: 'GET',
    //         success: function(data) {
    //             console.log(data);
    //             let option = '<option selected disabled>Pilih Kabupaten</option>';
    //             data.forEach(item => {
    //                 option += `<option value="${item.id}">${item.name}</option>`;
    //             });
    //             $('#kabupaten').html(option);
    //         }
    //     });
    // });

    // $('#kabupaten').on('change', function() {
    //     let id = $(this).val();
    //     $.ajax({
    //         url: `http://www.emsifa.com/api-wilayah-indonesia/api/districts/${id}.json`,
    //         method: 'GET',
    //         success: function(data) {
    //             console.log(data);
    //             let option = '<option selected disabled>Pilih Kecamatan</option>';
    //             data.forEach(item => {
    //                 option += `<option value="${item.id}">${item.name}</option>`;
    //             });
    //             $('#kecamatan').html(option);
    //         }
    //     });
    // });

    // $('#kecamatan').on('change', function() {
    //     let id = $(this).val();
    //     $.ajax({
    //         url: `http://www.emsifa.com/api-wilayah-indonesia/api/villages/${id}.json`,
    //         method: 'GET',
    //         success: function(data) {
    //             console.log(data);
    //             let option = '<option selected disabled>Pilih Kecamatan</option>';
    //             data.forEach(item => {
    //                 option += `<option value="${item.id}">${item.name}</option>`;
    //             });
    //             $('#desa').html(option);
    //         }
    //     });
    // });



    </script>

@endpush
