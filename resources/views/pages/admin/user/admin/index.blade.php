@extends('layouts.app')

@section('title', $title)

@push('before-style')

@endpush

    @section('content')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Administrator</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Data Administrator</li>
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

                        <div class="btn-group mb-5">
                            <a href="{{ route('admin.admin.create') }}" class="btn btn-success btn-sm font-weight-bold"><i class="fa fa-plus-circle mr-2"></i>Tambah Data</a>
                        </div>

                        <div class="table-responsive">

                            <table id="siswa" class="table table-striped table-bordered" style="width: 100%">
                                <thead class="text-center">
                                   <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Aksi</th>
                                        <th class="text-center">Nama Lengkap</th>
                                        <th class="text-center">Jenis Kelamin</th>
                                        <th class="text-center">TTL</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">No Telp</th>
                                        <th class="text-center">Profile</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @php
                                        $n=1;
                                    @endphp
                                    @foreach ($data as $d)
                                        <tr>
                                            <td>{{ $n; }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ route('admin.admin.edit', $d->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil-alt"></i></a>
                                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus{{ $d->id }}"><i class="fa fa-trash-alt"></i></button>
                                                </div>


                                                <div class="modal fade" id="hapus{{ $d->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header bg-danger">
                                                            <h5 class="modal-title font-weight-bold" id="staticBackdropLabel">Konfirmasi Hapus</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="alert alert-info">
                                                                        <h5>Apakah anda yakin akan menhapus akun dengan nama : <span class="font-weight-bold">{{ $d->nama_lengkap }}</span></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                                                <form action="{{ route('admin.admin.destroy', $d->id) }}" method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </td>
                                            <td>{{ $d->nama_lengkap }}</td>
                                            <td>{{ $d->jenis_kelamin }}</td>
                                            <td>{{ $d->tmp_lahir }}, {{ $d->tgl_lahir->format('d, M Y') }}</td>
                                            <td>{{ $d->email }}</td>
                                            <td>{{ $d->no_telp }}</td>
                                            <td>
                                                @if ($d->foto_profile == null)
                                                    <span class="badge badge-danger">Belum Upload</span>
                                                @else
                                                    <img src="{{ Storage::url($d->foto_profile) }}" class="img-fluid rounded" alt="profile" width="50%">
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

      </div><!-- /.container-fluid -->

    </section>



    @endsection

    @push('after-script')

         <script>
            $(document).ready(function () {
                $('#siswa').DataTable();
            });
        </script>

    @endpush
