@extends('layouts.app')

@section('title', $title)

@push('before-style')

@endpush

    @section('content')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Vis & Misi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Visi & Misi</li>
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

                                @if ($brosur != null)

                                <form action="{{ route('admin.brosur.update', $brosur->id) }}" method="POST" enctype="multipart/form-data">

                                    @csrf
                                    @method('PUT')

                                @else

                                <form action="{{ route('admin.brosur.store') }}" method="POST" enctype="multipart/form-data">

                                    @csrf
                                    @method('POST')

                                @endif

                                    <div class="row">

                                        <div class="col-lg-6">

                                            <div class="m-1">
                                                <label for="br">Preview Brosur :</label>
                                                @if ($brosur != null)
                                                    <br>
                                                    <img src="{{ Storage::url($brosur->brosur) }}" alt="Brosur" class="img-fluid rounded" width="50%">
                                                @else
                                                    <div class="alert alert-info mr-3 ml-3" role="alert">
                                                        <h5 class="text-center">Tidak ada file brosur !</h5>
                                                    </div>
                                                @endif
                                            </div>

                                        </div>

                                        <div class="col-lg-6">

                                            <div class="form-group m-2">
                                                <label for="brosur">Brosur</label>
                                                <input type="file" name="brosur" class="form-control" required>
                                            </div>

                                        </div>

                                        <div class="form-group mt-3">
                                            <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                            @if ($brosur != null)
                                                <button type="button" class="btn btn-danger btn-sm" onclick="event.preventDefault(); document.getElementById('reset').submit()">Reset</button>
                                            @endif
                                        </div>

                                    </div>

                                </form>

                                @if ($brosur != null)
                                    <form action="{{ route('admin.brosur.destroy', $brosur->id) }}" method="POST" id="reset">
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

    @endpush
