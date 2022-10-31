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

                                @if ($vm != null)

                                <form action="{{ route('admin.visi_misi.update', $vm->id) }}" method="POST" enctype="multipart/form-data">

                                    @csrf
                                    @method('PUT')

                                @else

                                <form action="{{ route('admin.visi_misi.store') }}" method="POST" enctype="multipart/form-data">

                                    @csrf
                                    @method('POST')

                                @endif

                                    <div class="row">

                                        <div class="col-lg-6">

                                             <div class="form-group">
                                                <label for="visi">Visi</label>
                                               <textarea name="visi" id="visi" class="form-control" cols="30" rows="10">{{ $vm == null ? old('visi') : $vm->visi }}</textarea>
                                                @error('visi')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="col-lg-6">

                                             <div class="form-group">
                                                <label for="misi">Misi</label>
                                               <textarea name="misi" id="misi" class="form-control" cols="30" rows="10">{{ $vm == null ? old('misi') : $vm->misi }}</textarea>
                                                @error('misi')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                            @if ($vm != null)
                                                <button type="button" class="btn btn-danger btn-sm" onclick="event.preventDefault(); document.getElementById('reset').submit()">Reset</button>
                                            @endif
                                        </div>

                                    </div>

                                </form>

                                @if ($vm != null)
                                    <form action="{{ route('admin.visi_misi.destroy', $vm->id) }}" method="POST" id="reset">
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
            CKEDITOR.replace( 'visi' );
            CKEDITOR.replace( 'misi' );
        </script>
    @endpush
