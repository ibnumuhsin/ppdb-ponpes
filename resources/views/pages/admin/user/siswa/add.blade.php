@extends('layouts.app')

@section('title', $title)

@push('before-style')

@endpush

    @section('content')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Data Siswa/i</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{ route('admin.siswa.index') }}">Data Siswa/i</a></li>
              <li class="breadcrumb-item active">Tambah</li>
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

                        <div class="btn-group mb-3">
                            <a href="{{ route('admin.siswa.index') }}" class="btn btn-warning btn-sm font-weight-bold"><i class="fa fa-arrow-circle-left"></i>&nbsp;Kembali</a>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">

                                <form action="{{ route('admin.siswa.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="nama">Nama Legkap :</label>
                                                <input type="text" name="nama_lengkap" id="nama" class="form-control" value={{ old('nama_lengkap') }}>
                                                @error('nama_lengkap')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="nisn">NISN :</label>
                                                <input type="number" name="nisn" id="nisn" class="form-control" value="{{ old('nisn') }}">
                                                @error('nisn')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="nik">NIK :</label>
                                                <input type="number" name="nik" id="nik" class="form-control" value="{{ old('nik') }}">
                                                @error('nik')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="jenis_kelmin">Jenis Kelamin :</label>
                                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                                    <option selected disabled>-- Pilih Jenis Kelamin --</option>
                                                    <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki - Laki</option>
                                                    <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan</option>
                                                </select>
                                                @error('jenis_kelamin')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label for="tmp">Tempat Lahir :</label>
                                                    <input type="text" name="tmp_lahir" id="tmp" class="form-control" value="{{ old('tmp_lahir') }}">
                                                    @error('tmp_lahir')
                                                            <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="tgl">Tanggal Lahir :</label>
                                                    <input type="date" name="tgl_lahir" id="tgl" class="form-control" value="{{ old('tgl_lahir') }}">
                                                    @error('tmp_lahir')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6">

                                            <div class="form-group">
                                                <label for="email">Email :</label>
                                                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                                                @error('email')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="no_telp">No Telp :</label>
                                                <input type="number" name="no_telp" id="no_telp" class="form-control" value="{{ old('no_telp') }}">
                                                @error('no_telp')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="foto">Foto Profile :</label>
                                                <input type="file" name="foto_profile" class="form-control" id="foto">
                                                @error('foto_profile')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="pswd">Password :</label>
                                                <input type="password" name="password" class="form-control" id="pswd"  required>
                                                @error('password')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                        </div>

                                    </div>

                                    <div class="form-group mt-3">
                                        <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

      </div><!-- /.container-fluid -->

    </section>



    @endsection

    @push('after-script')

    @endpush
