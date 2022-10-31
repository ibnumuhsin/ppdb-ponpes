@extends('layouts.landing')


@section('title', $title)


@push('after-style')

@endpush


@section('content')
    <section class="jumbotron jumbotron-fluid bg-white">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-8">
            <div class="text-jumbotron p-5">
              <h2>Pendaftaran Peserta Didik Baru</h2>
              <h3>Selamat Datang di Sistem PPDB ( Online ) <br> Pondok Pesantren Bahrul Maghfiroh Bintaro <br>
                bagi calon wali santri dan calon santri baru
              </h3>
              <h4>Tahun Pelajaran 2022/2023</h4>
              <h6><i>Periode 01 November 2022 s/d 31 Juni 2023</i></h6>
            </div>
            <div class="row">
              <div class="col-lg-8">
                <div class="row px-5 button-jumbotron">
                  <div class="col-lg-6 mb-3">
                    <a href="{{ route('pendaftaran.index') }}" class="btn btn-warning font-weight-bold">Daftar Sekarang</a>
                  </div>
                  <div class="col-lg-6 mb-3">
                    <a href="{{ route('brosur.dwonload') }}" class="btn btn-success font-weight-bold"><i class="fa-solid fa-file-arrow-down"></i>&nbsp;Download Brosur</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
              <div class="logo-jumbotron py-auto px-auto">
                <img src="{{ asset('landingpages/assets/logo/logo.png') }}" class="rounded mx-auto d-block mt-5" style="vertical-align:middle; max-width: 50%"
                  alt="">
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="call-to-action no-padding dark-bg">
  <div class="container">
    <div class="action-style-box">
        <div class="row">
          <div class="col-md-12 text-center text-md-left">
              <div class="call-to-action-text">
                <h1 class="text-center text-white">Alur Pendaftaran Santri Online</h1>
              </div>
          </div><!-- Col end -->
          <div class="col-md-6 offset-md-3">
            <ul class="timeline">
                @forelse ($alur as $a)

                    <li>
                        <h4 class="text-white">{{ $a->judul }}</h4>
                        <p class="text-white">{{ $a->deskripsi }}</p>
                    </li>

                @empty

                    <div class="alert alert-info text-center mt-3" role="alert">
                        <h5 class="font-weight-bold">Data tidak di temukan !</h5>
                    </div>

                @endforelse
            </ul>
          </div>
        </div>
        <!-- row end -->
    </div><!-- Action style box -->
  </div><!-- Container end -->
</section><!-- Action end -->

<section id="ts-features" class="ts-features pb-2">
  <div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="row">
            <div class="col-lg-4 col-md-4">
              <div class="ts-service-box">
                <div class="ts-service-image-wrapper">
                  <img loading="lazy" class="img-fluid rounded" src="{{ asset('./landingpages/assets/logo/syarat.png') }}" alt="service-image" width="75%" class="rounded mx-auto d-block">
                </div>
              </div>
            </div>
            <div class="col-lg-8 col-md-8">
              <h2 class="text-center">Persyaratan Pendaftaran</h2>
              <p class="font-weight-bold">Untuk memenuhi persyaratan pendaftaran, ada beberapa berkas yang harus diupload di system pendaftaran :</p>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-8">
                            <ul>
                                @forelse ($syarat as $s)

                                    <li style="list-style: none">
                                        <i class="fas fa-check-square fa-xl text-success"></i>&nbsp;
                                        <span class="font-weight-bold">{{ $s->persyaratan }}</span>
                                    </li>

                                @empty

                                    <div class="alert alert-info text-center mt-3" role="alert">
                                        <h5 class="font-weight-bold">Data tidak di temukan !</h5>
                                    </div>

                                @endforelse

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div><!-- Content row end -->`
  </div><!-- Container end -->
</section><!-- Feature are end -->


@endsection

@push('after-script')

@endpush
