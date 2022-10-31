@extends('layouts.app')

@section('title', $title)

@push('before-style')
@endpush

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kelulusan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Kelulusan</li>
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

                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success btn-sm mb-3 mt-3" data-toggle="modal"
                                            data-target="#lulus"><i class="fa fa-graduation-cap"></i> Keterangan
                                            Lulus</button>
                                    </div>

                                    <div class="btn-group">
                                        <a class="btn btn-success btn-sm" href="{{ route('admin.status.lulus') }}">Lulus</a>
                                    </div>

                                    <div class="btn-group">
                                        <a class="btn btn-danger btn-sm" href="{{ route('admin.tidak.lulus') }}">Tidak Lulus</a>
                                    </div>

                                    <div class="table-responsive">
                                        <table id="kelulusan" class="table table-striped table-bordered"
                                            style="width: 100%">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">No</th>
                                                    <th class="text-center">No Pendaftaran</th>
                                                    <th class="text-center">NISN</th>
                                                    <th class="text-center">NIK</th>
                                                    <th class="text-center">Nama Lengkap</th>
                                                    <th class="text-center">Status Kelulusan</th>
                                                    <th class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $n = 1;
                                                @endphp
                                                @foreach ($kelulusan as $l)
                                                    <tr>
                                                        <td class="text-center">{{ $n }}</td>
                                                        <td class="text-center">{{ $l->no_pendaftaran }}</td>
                                                        <td class="text-center">{{ $l->nisn }}</td>
                                                        <td class="text-center">{{ $l->nik }}</td>
                                                        <td class="text-center">{{ $l->nama_lengkap }}</td>
                                                        <td class="text-center">
                                                            @if ($l->status_kelulusan == 0)
                                                                <span class="badge badge-warning">Belum di Tentukan</span>
                                                            @elseif ($l->status_kelulusan == 2)
                                                                <span class="badge badge-danger">Tidak Lulus</span>
                                                            @elseif($l->status_kelulusan == 1)
                                                                <span class="badge badge-success">Lulus</span>
                                                            @endif
                                                            <hr>
                                                            <div class="btn-group">
                                                                <button class="btn btn-{{  $l->status_kelulusan == 0 ? 'warning' : ( $l->status_kelulusan == 1 ? 'success' : 'secondary' ) }} btn-sm" onclick="event.preventDefault(); document.getElementById('lulus_1_{{ $l->id }}').submit()"><i class="fas fa-check-circle"></i></button>
                                                                <button class="btn btn-{{  $l->status_kelulusan == 0 ? 'warning' : ( $l->status_kelulusan == 2 ? 'danger' : 'secondary' ) }} btn-sm" onclick="event.preventDefault(); document.getElementById('lulus_2_{{ $l->id }}').submit()"><i class="fas fa-times-circle"></i></button>
                                                            </div>

                                                            <form action="{{ route('admin.kelulusan.update', $l->id) }}"
                                                                method="POST" enctype="multipart/form-data" id="lulus_1_{{ $l->id }}">
                                                                @csrf
                                                                @method('PUT')
                                                                <input type="hidden" name="status_kelulusan" value="1"
                                                                    readonly>
                                                            </form>
                                                            <form action="{{ route('admin.kelulusan.update', $l->id) }}"
                                                                method="POST" enctype="multipart/form-data" id="lulus_2_{{ $l->id }}">
                                                                @csrf
                                                                @method('PUT')
                                                                <input type="hidden" name="status_kelulusan" value="2"
                                                                    readonly>
                                                            </form>

                                                        </td>
                                                        <td class="text-center">
                                                            @if ($l->status_kelulusan == 0)
                                                                <small class="text-danger text-center">Aksi not found !</small>
                                                            @else
                                                                <a href="{{ route('admin.cetak_bukti_kelulusan.show', $l->id) }}" class="btn btn-info btn-sm"><i class="fas fa-download"></i></a>
                                                            @endif
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



    <div class="modal fade" id="lulus" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title" id="staticBackdropLabel">Keterangan Kelulusan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">

                            @if ($ket == null || empty($ket))
                                <form action="{{ route('admin.keterangan.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                @else
                                    <form action="{{ route('admin.keterangan.update', $ket->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                            @endif


                            <div class="form-group">
                                <textarea name="keterangan" id="ketlulus" class="form-control ketlulus" cols="30" rows="10">{{ $ket == null ? old('keterangan') : $ket->keterangan }}</textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                @if ($ket != null)
                                    <button type="button" class="btn btn-danger btn-sm"
                                        onclick="event.preventDefault(); document.getElementById('reset').submit()">Reset</button>
                                @endif
                            </div>

                            </form>

                            @if (!empty($ket))
                                <form action="{{ route('admin.keterangan.destroy', $ket->id) }}" method="POST"
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
            $('#kelulusan').DataTable();
        });
    </script>

    <script>
        CKEDITOR.replace('ketlulus');
    </script>
@endpush
