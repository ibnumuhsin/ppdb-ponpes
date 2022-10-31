@extends('layouts.app')

@section('title', $title)

@push('before-style')
@endpush

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Status Tidak Lulus</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.kelulusan.index') }}">Kelulusan</a></li>
                        <li class="breadcrumb-item active">Tidak Lulus</li>
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

                             <div class="btn-group mb-3">
                                <a class="btn btn-warning btn-sm font-weight-bold" href="{{ url()->previous() }}"><i class="fas fa-arrow-left"></i> Kembali</a>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="table-responsive">
                                        <table id="tidak" class="table table-striped table-bordered"
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



@endsection
@push('after-script')
    <script>
        $(document).ready(function() {
            $('#tidak').DataTable();
        });
    </script>
@endpush
