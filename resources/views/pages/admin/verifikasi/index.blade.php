@extends('layouts.app')

@section('title', $title)

@push('before-style')
@endpush

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Verifikasi Pendaftaran</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Verifikasi Pendaftaran</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="btn-group">
                                <button type="button" class="btn btn-success btn-sm mb-3" data-toggle="modal"
                                    data-target="#mt"><i class="fa fa-list"></i> Materi & Jadwal Tes</button>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table id="verifikasi" class="table table-striped table-bordered"
                                            style="width: 100%">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">No</th>
                                                    <th class="text-center">No Pendaftaran</th>
                                                    <th class="text-center">NISN</th>
                                                    <th class="text-center">NIK</th>
                                                    <th class="text-center">Nama Lengkap</th>
                                                    <th class="text-center">Status Verifikasi</th>
                                                    <th class="text-center">Bidoata</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $n = 1;
                                                @endphp
                                                @foreach ($verifikasi as $v)
                                                    <tr>
                                                        <td class="text-center">{{ $n }}</td>
                                                        <td class="text-center">{{ $v->no_pendaftaran }}</td>
                                                        <td class="text-center">{{ $v->nisn }}</td>
                                                        <td class="text-center">{{ $v->nik }}</td>
                                                        <td class="text-center">{{ $v->nama_lengkap }}</td>
                                                        <td class="text-center">
                                                            @if ($v->status_verifikasi == 2)
                                                                <span class="badge badge-danger">Belum Terverifikasi</span>
                                                            @elseif($v->status_verifikasi == 1)
                                                                <span class="badge badge-success">Terverifikasi</span>
                                                            @endif
                                                            <hr>
                                                             <div class="btn-group">
                                                                <button class="btn btn-{{  $v->status_verifikasi == 1 ? 'success' : 'secondary'  }} btn-sm" onclick="event.preventDefault(); document.getElementById('verif_1_{{ $v->id }}').submit()"><i class="fas fa-check-circle"></i></button>
                                                                <button class="btn btn-{{  $v->status_verifikasi == 2 ? 'danger' : 'secondary'  }} btn-sm" onclick="event.preventDefault(); document.getElementById('verif_2_{{ $v->id }}').submit()"><i class="fas fa-times-circle"></i></button>
                                                            </div>

                                                            <form action="{{ route('admin.verifikasi.update', $v->id) }}"
                                                                method="POST" enctype="multipart/form-data" id="verif_1_{{ $v->id }}">
                                                                @csrf
                                                                @method('PUT')
                                                                <input type="hidden" name="status_verifikasi"
                                                                    value="1" readonly>
                                                            </form>
                                                            <form action="{{ route('admin.verifikasi.update', $v->id) }}"
                                                                method="POST" enctype="multipart/form-data" id="verif_2_{{ $v->id }}">
                                                                @csrf
                                                                @method('PUT')
                                                                <input type="hidden" name="status_verifikasi"
                                                                    value="2" readonly>
                                                            </form>

                                                        </td>
                                                        <td class="text-center">
                                                            <div class="btn-group">
                                                                <a href="{{ route('admin.verifikasi.show', $v->id) }}"
                                                                    class="btn btn-info btn-sm"><i
                                                                        class="fa fa-user-circle"></i>&nbsp;Biodata</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @php
                                                        $n++;
                                                    @endphp
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

    <div class="modal fade" id="mt" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title" id="staticBackdropLabel">Materi dan Jadwal Tes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">

                            @if ($mt == null || empty($mt))
                                <form action="{{ route('admin.materi_test.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                @else
                                    <form action="{{ route('admin.materi_test.update', $mt->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                            @endif


                            <div class="form-group">
                                <textarea name="materi_test" id="materi" class="form-control materi" cols="30" rows="10">{{ $mt == null ? old('materi_test') : $mt->materi_test }}</textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                @if ($mt != null)
                                    <button type="button" class="btn btn-danger btn-sm"
                                        onclick="event.preventDefault(); document.getElementById('reset').submit()">Reset</button>
                                @endif
                            </div>

                            </form>

                            @if (!empty($mt))
                                <form action="{{ route('admin.materi_test.destroy', $mt->id) }}" method="POST"
                                    id="reset">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            @endif

                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>


@endsection
@push('after-script')
    <script>
        $(document).ready(function() {
            $('#verifikasi').DataTable();
        });
    </script>
    <script>
        CKEDITOR.replace('materi');
    </script>
@endpush
