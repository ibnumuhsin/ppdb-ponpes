@extends('layouts.app')

@section('title', $title)

@push('before-style')
@endpush

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Biografi Pendiri</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Biografi Pendiri</li>
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

                                    @if ($biografi != null)
                                        <form action="{{ route('admin.biografi_pendiri.update', $biografi->id) }}"
                                            method="POST" enctype="multipart/form-data">

                                            @csrf
                                            @method('PUT')
                                        @else
                                            <form action="{{ route('admin.biografi_pendiri.store') }}" method="POST"
                                                enctype="multipart/form-data">

                                                @csrf
                                                @method('POST')
                                    @endif

                                    <div class="row">

                                        <div class="col-lg-6">

                                            <div class="form-group">
                                                <label for="nama">Nama Pendiri</label>
                                                <input type="text" id="nama" name="nama" class="form-control"
                                                    value="{{ $biografi == null ? old('nama') : $biografi->nama }}"
                                                    required>
                                                @error('nama')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label for="tmp_lahir">Tempat Lahir</label>
                                                    <input type="text" name="tmp_lahir" class="form-control"
                                                        value="{{ $biografi == null ? old('tmp_lahir') : $biografi->tmp_lahir }}">
                                                    @error('tmp_lahir')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                                        <input type="date" id="tgl_lahir" name="tgl_lahir"
                                                            class="form-control"
                                                            value="{{ $biografi == null ? old('tgl_lahir') : Str::substr($biografi->tgl_lahir, 0, -9) }}"
                                                            required>
                                                        @error('tgl_lahir')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label for="tmp_wafat">Tempat Wafat</label>
                                                    <input type="text" id="tmp_wafat" name="tmp_wafat"
                                                        class="form-control"
                                                        value="{{ $biografi == null ? old('tmp_wafat') : $biografi->tmp_wafat }}">
                                                    @error('tmp_wafat')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="tgl_wafat">Tanggal Wafat</label>
                                                        <input type="date" id="tgl_wafat" name="tgl_wafat"
                                                            class="form-control"
                                                            value="{{ $biografi == null ? old('tgl_wafat') : Str::substr($biografi->tgl_wafat, 0, -9) }}">
                                                        @error('tgl_wafat')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control">{{ $biografi == null ? old('alamat') : $biografi->alamat }}</textarea>
                                                @error('alamat')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="foto">Foto Pendiri</label>
                                                @if ($biografi != null)
                                                    <br>
                                                    <img src="{{ Storage::url($biografi->foto) }}"
                                                        class="img-fluid rounded mb-2" alt="foto_pendiri" width="40%">
                                                    <br>
                                                @endif
                                                <input type="file" id="foto" name="foto" class="form-control"
                                                    value="{{ old('foto') }}">
                                                @error('foto')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="col-lg-6">

                                            <div class="form-group">
                                                <label for="biografi">Biografi Pendiri</label>
                                                <textarea name="biografi" id="biografi" class="form-control" cols="30" rows="10">{{ $biografi == null ? old('biografi') : $biografi->biografi }}</textarea>
                                                @error('biografi')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                            @if ($biografi != null)
                                                <button type="button" class="btn btn-danger btn-sm"
                                                    onclick="event.preventDefault(); document.getElementById('reset').submit()">Reset</button>
                                            @endif
                                        </div>

                                    </div>

                                    </form>

                                    @if ($biografi != null)
                                        <form action="{{ route('admin.biografi_pendiri.destroy', $biografi->id) }}"
                                            method="POST" id="reset">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    @endif

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
        CKEDITOR.replace('biografi');
    </script>
@endpush
