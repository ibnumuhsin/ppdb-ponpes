@extends('layouts.app')

@section('title', $title)

@push('before-style')

@endpush

    @section('content')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Biaya Pendidikan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Biaya Pendidikan</li>
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
                            <button class="btn btn-success btn-sm font-weight-bold" data-toggle="modal" data-target="#add"><i class="fa fa-plus-circle mr-2"></i>Tambah Data</button>
                        </div>

                        <div class="table-responsive">

                            <table id="biaya" class="table table-striped table-bordered" style="width: 100%">
                                <thead>
                                   <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Rincian</th>
                                        <th class="text-center">Biaya</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $n=1;
                                    @endphp
                                    @foreach ($biaya as $b)
                                        <tr>
                                            <td class="text-center" width="5%">{{ $n }}.</td>
                                            <td class="text-center">{{ $b->rincian }}</td>
                                            <td class="text-center">Rp.&nbsp;{{ number_format($b->biaya, 0) }}</td>
                                            <td class="d-flex justify-content-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit{{ $b->id }}"><i class="fa fa-pencil-alt"></i></button>
                                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus{{ $b->id }}"><i class="fa fa-trash-alt"></i></button>


                                                    <!-- Modal -->
                                                    <div class="modal fade" id="hapus{{ $b->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                            <div class="modal-header bg-danger">
                                                                <h5 class="modal-title font-weight-bold" id="staticBackdropLabel">Hapus Data | {{ $b->judul }}</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row d-flex justify-content-center">
                                                                    <div class="col-lg-12">
                                                                        <div class="alert alert-info text-center" role="alert">
                                                                            <p class="font-weight-bold">Apakah anda yakin akan menghapus data ini ?</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>

                                                                <form action="{{ route('admin.biaya_pendidikan.destroy', $b->id) }}" method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                                                                </form>

                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>

                                                <!-- Modal Edit -->
                                                <div class="modal fade" id="edit{{ $b->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header bg-warning">
                                                            <h5 class="modal-title font-weight-bold" id="staticBackdropLabel">Edit Data | {{ $b->judul }}</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <form action="{{ route('admin.biaya_pendidikan.update', $b->id) }}" method="POST" enctype="multipart/form-data">

                                                                        @csrf
                                                                        @method('PUT')

                                                                         <div class="form-group">
                                                                            <label for="rincian">Rincian :</label>
                                                                            <textarea name="rincian" id="rincian" cols="30" rows="5" class="form-control">{{ $b->rincian }}</textarea>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="biaya">Rincian :</label>
                                                                            <input type="number" name="biaya" class="form-control" id="biaya" value="{{ $b->biaya }}" required>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                                                                        </div>

                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">

                                                        </div>
                                                        </div>
                                                    </div>
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

      </div><!-- /.container-fluid -->

    </section>


    <!-- Modal -->
    <div class="modal fade" id="add" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title font-weight-bold" id="staticBackdropLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{ route('admin.biaya_pendidikan.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            @method('POST')

                            <div class="form-group">
                                <label for="rincian">Rincian :</label>
                                <textarea name="rincian" id="rincian" cols="30" rows="5" class="form-control">{{ old('rincian') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="biaya">Rincian :</label>
                                <input type="number" name="biaya" class="form-control" id="biaya" value="{{ old('biaya') }}" required>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                            </div>

                        </form>
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
            $(document).ready(function () {
                $('#biaya').DataTable();
            });
        </script>

    @endpush
