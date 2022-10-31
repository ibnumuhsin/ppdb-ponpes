@extends('layouts.app')

@section('title', $title)

@push('before-style')
@endpush

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Bukti Kelulusan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Bukti Kelulusan</li>
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
                            <div class="row">
                                <div class="col-lg-12">
                                    @if ($bk == null || empty($bk))
                                        <form action="{{ route('admin.bukti_kelulusan.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('POST')
                                        @else
                                            <form action="{{ route('admin.bukti_kelulusan.update', $bk->id) }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                    @endif

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="yayasan">Logo Yayasan :</label>
                                                @if ($bk != null || !empty($bk))
                                                    <br>
                                                    <img src="{{ Storage::url($bk->logo_yayasan) }}"
                                                        class="img-fluid rounded mb-3" width="40%" alt="">
                                                @endif
                                                <input type="file" name="logo_yayasan" class="form-control">
                                                @error('logo_yayasan')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="logo_ponpes">Logo PonPes :</label>
                                                @if ($bk != null || !empty($bk))
                                                    <br>
                                                    <img src="{{ Storage::url($bk->logo_ponpes) }}"
                                                        class="img-fluid rounded mb-3" width="40%" alt="">
                                                @endif
                                                <input type="file" name="logo_ponpes" class="form-control">
                                                @error('logo_ponpes')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="header">Header :</label>
                                                <textarea name="header" id="header" cols="30" rows="10" class="form-control header">{{ $bk == null ? old('header') : $bk->header }}</textarea>
                                                @error('header')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="thn">Tahun Ajaran</label>
                                                <input type="text" name="thn_ajaran" id="thn" class="form-control"
                                                    value="{{ $bk == null ? old('thn_ajaran') : $bk->thn_ajaran }}">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="alamat">Alamat :</label>
                                                <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control">{{ $bk == null ? old('alamat') : $bk->alamat }}</textarea>
                                                @error('alamat')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="judul">Judul :</label>
                                                <textarea name="judul" id="alamat" cols="30" rows="5" class="form-control">{{ $bk == null ? old('judul') : $bk->judul }}</textarea>
                                                @error('judul')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="body_1">Body 1 :</label>
                                                <textarea name="body_1" id="body_1" cols="30" rows="5" class="form-control">{{ $bk == null ? old('body_1') : $bk->body_1 }}</textarea>
                                                @error('body_1')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="body_2">Body 2 :</label>
                                                <textarea name="body_2" id="body_2" cols="30" rows="5" class="form-control">{{ $bk == null ? old('body_2') : $bk->body_2 }}</textarea>
                                                @error('body_2')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="tempat">Tempat / Kota :</label>
                                                <input type="text" id="tempat" name="tempat" class="form-control"
                                                    value="{{ $bk == null ? old('tempat') : $bk->tempat }}">
                                                @error('tempat')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="tanggal">Tanggal :</label>
                                                <input type="date" id="tanggal" name="tanggal" class="form-control"
                                                    value="{{ $bk == null ? old('tanggal') : Str::substr($bk->tanggal, 0, -9) }}">
                                                @error('tanggal')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="jabatan_panitia">Jabatan Panitia :</label>
                                                <input type="text" name="jabatan_panitia" id="jabatan_panitia"
                                                    class="form-control"
                                                    value="{{ $bk == null ? old('jabatan_panitia') : $bk->jabatan_panitia }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="nama_panitia">Nama Panitia :</label>
                                                <input type="text" name="nama_panitia" id="nama_panitia"
                                                    class="form-control"
                                                    value="{{ $bk == null ? old('nama_panitia') : $bk->nama_panitia }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="ttd_stample_panitia">Tanda Tangan Panitia :</label>
                                                @if ($bk != null || !empty($bk))
                                                    <br>
                                                    <img src="{{ Storage::url($bk->ttd_stample_panitia) }}"
                                                        class="img-fluid rounded mb-3" width="50%" alt="">
                                                @endif
                                                <input type="file" name="ttd_stample_panitia" id="ttd_stample_panitia"
                                                    class="form-control" value="{{ old('ttd_stample_panitia') }}">
                                                @error('tdd_stample_panitia')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">

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
        </div><!-- /.container-fluid -->

    </section>



@endsection

@push('after-script')
    <script>
        CKEDITOR.replace('header');
    </script>
    <script>
        CKEDITOR.replace('alamat');
    </script>
    <script>
        CKEDITOR.replace('judul');
    </script>
    <script>
        CKEDITOR.replace('body_1');
    </script>
    <script>
        CKEDITOR.replace('body_2');
    </script>
@endpush
