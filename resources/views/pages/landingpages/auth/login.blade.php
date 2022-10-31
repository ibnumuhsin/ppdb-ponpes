@extends('layouts.landing')

@section('title', $title)

@push('after-style')

@endpush

@section('content')

    <section id="main-container" class="main-container">
   <div class="container">

      {{-- <div class="row text-center">
         <div class="col-12">
            <h3 class="section-sub-title mb-4">Selamat Datang di Aplikasi PPDB</h3>
            <h4>Pondok Pesantren bahrul Maghfiroh</h4>
         </div>
      </div> --}}
      <!--/ Title row end -->

      <div class="row">
        <div class="col-lg-12">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-5">
                  <div class="card mt-4">
                    <div class="card body">
                        <div class="d-flex justify-content-center m-3">
                            <img src="{{ asset('./landingpages/assets/logo/logo.png') }}" class="rounded mx-auto d-block" alt="..." width="30%">
                        </div>
                        <h4 class="text-center">PPDB Bahrul Maghfiroh</h4>
                        <h5 class="text-center"><i>Tahun Pelajaran 2023/2024</i></h5>
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <p class="text-danger">{{ $error }}</p>
                            @endforeach
                        @endif
                        <div class="m-5">
                        <form action="{{ route('santri.login') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                          <div class="form-group">
                            <label for="nisn" class="font-weight-bold">NISN :</label>
                            <input type="number" name="nisn" id="nisn" class="form-control rounded" required>
                          </div>
                          <div class="form-group">
                            <label for="password" class="font-weight-bold">Password :</label>
                            <input type="password" name="password" id="password" class="form-control rounded" required>
                          </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block">Login</button>
                          </div>
                          <span class="font-weight-bold">Belum memiliki akun ? <a href="{{ route('pendaftaran.index') }}" class="text-info">Daftar Sekarang</a></span>
                        </form>
                      </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
      </div>
      <!-- Content row end -->

   </div><!-- Container end -->
</section>

@endsection

@push('after-script')

@endpush
