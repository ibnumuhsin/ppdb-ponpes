@extends('layouts.landing')

@section('title', $title)

@push('after-style')

@endpush

@section('content')

    <section id="main-container" class="main-container">
  <div class="container">

    <h3 class="column-title">Pendiri Pondok Pesantren</h3>
    <div class="row">
        @if (empty($biografi))

            <div class="col-lg-12">

                <div class="text-center">
                    <h4 class="text-danger">Data tidak di temukan !</h4>
                </div>

            </div>

        @else

        <div class="col-lg-4">
            <div class="text-center">
              <img src="{{ Storage::url($biografi->foto)     }}" class="rounded mx-auto d-block" alt="foto-pendiri" width="50%">
            </div>
        </div><!-- Col end -->

        <div class="col-lg-8 mt-5 mt-lg-0">
            <div class="table resposive">
              <table class="font-weight-bold" style="border: hidden">
                  <tr style="border: hidden">
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{ $biografi->nama }}</td>
                  </tr>
                  <tr style="border: hidden">
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td>{{ $biografi->tmp_lahir }}, {{ Str::substr($biografi->tgl_lahir, 0, -9) }}</td>
                  {{-- </tr>
                   <tr style="border: hidden">
                     <td>Tanggal Wafat</td>
                     <td>:</td>
                     <td>{{ $biografi->tmp_wafat }}, {{ Str::substr($biografi->tgl_wafat, 0, -9) }}</td>
                   </tr> --}}
                   <tr style="border: hidden">
                     <td>Alamat</td>
                     <td>:</td>
                     <td>{{ $biografi->alamat }}</td>
                   </tr>
              </table>
            </div>
            <div class="card">
              <div class="card-header bg-info">
                <h5 class="card-title text-white">Biografi {{ $biografi->nama }}</h5>
              </div>
              <div class="card-body">
                  <p>
                    {!! $biografi->biografi !!}
                  </p>
              </div>
            </div>
        </div><!-- Col end -->

        @endif

    </div><!-- Content row end -->

  </div><!-- Container end -->
</section>

<section id="facts" class="facts-area dark-bg">
  <div class="container">
    <div class="facts-wrapper">
        <div class="row text-center">
            <div class="col-lg-12">
              <h3 class="section-sub-title">Visi & Misi</h3>
            </div>
        </div>
           <div class="row">
             <div class="col-lg-12">

                @if (empty($vm))

                    <h4 class="text-danger">Data Tidak di Temukan !</h4>

                @else

               <div class="row">
                 <div class="col-lg-6">
                   <h3 class="text-center">Visi</h3>
                   <h5 class="text-center m-5 text-white">
                        {!! $vm->visi !!}
                   </h5>
                 </div>
                 <div class="col-lg-6">
                   <h3 class="">Misi</h3>
                   <ul>
                       <h5 class="text-white text-left">
                            {!! $vm->misi !!}
                       </h5>
                   </ul>
                 </div>
               </div>

            @endif

             </div>
           </div>
    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->
</section>

<section id="ts-team" class="ts-team">
  <div class="container">
    <div class="row text-center">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-4">
              <h3>Fasilitas Pesantren</h3>
                <ul>
                    @forelse ($fasilitas as $f)

                        <li class="text-left" style="list-style: none">
                            <i class="fas fa-check-square fa-xl text-success"></i>&nbsp;
                            <span class="font-weight-bold">{{ $f->fasilitas }}</span>
                        </li>

                    @empty

                        <h5 class="text-danger text-center">Data Tidak di Temukan !</h5>

                    @endforelse
                </ul>
            </div>
            <div class="col-lg-4">
              <h3>Extra Kurikuler</h3>
               <ul>
                @forelse ($extra as $e)

                    <li class="text-left" style="list-style: none">
                    <i class="fas fa-check-square fa-xl text-success"></i>&nbsp;
                    <span class="font-weight-bold">{{ $e->extra_kulikuler }}</span>
                    </li>

                @empty

                    <h5 class="text-danger text-center">Data Tidak di Temukan !</h5>

                @endforelse
               </ul>
            </div>
            <div class="col-lg-4">
                <div class="m-5">
                  <img src="{{ asset('./landingpages/assets/logo/mondok.png') }}" width="75%" class="rounded mx-auto d-block" alt="...">
                </div>
            </div>
          </div>
        </div>
    </div><!--/ Title row end -->


    <!--/ Content row end -->
  </div><!--/ Container end -->
</section>

@endsection

@push('after-script')

@endpush
