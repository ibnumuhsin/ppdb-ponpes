@extends('layouts.siswa')

@section('title', $title)

@push('before-style')
@endpush

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">My Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">My Profile</li>
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
                            <form action="{{ route('santri.my_profile.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="profile">Foto Profile <small class="text-danger">*Kosongi jika tidak di ubah.</small></label>
                                                    @if(Auth::user()->foto_profile != null)
                                                        <br>
                                                        <img src="{{ Storage::url(Auth::user()->foto_profile) }}" alt="" class="img-fluid rounded mb-2" width="30%">
                                                    @endif
                                                    <input type="file" name="foto_profile" class="form-control">
                                                    @error('foto_profile')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" id="email" class="form-control" value="{{ Auth::user()->email }}">
                                                    @error('email')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="no">No Telephon</label>
                                                    <input type="number" name="no_telp" id="no" class="form-control" value="{{ Auth::user()->no_telp }}">
                                                    @error('no_telp')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="psw">Password <small class="text-danger">*Kosongi jika tidak di ubah !</small></label>
                                                    <input type="password" name="password" class="form-control rounded" id="psw">
                                                    @error('password')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <button class="btn btn-success btn-sm">Simpan</button>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /.container-fluid -->

    </section>





@endsection

@push('after-script')
@endpush
