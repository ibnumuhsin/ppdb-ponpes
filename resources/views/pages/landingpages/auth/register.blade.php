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
                <div class="col-lg-10">

                @if ($is_open->is_open == 1)

                <div class="card">
                  <div class="card-header bg-primary">
                    <h4 class="text-center text-white">Formulir Pendaftaran
                      Santri</h4>
                  </div>
                  <div class="card-body">
                    <form action="{{ route('pendaftaran.store') }}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="form-group">
                            <label for="nama">Nama Lengkap :</label>
                            <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap') }}" class="form-control rounded" id="nama">
                              @error('nama_lengkap')
                                  <small class="text-danger">{{ $message }}</small>
                              @enderror
                          </div>
                          <div class="row">
                            <div class="col-lg-4">
                              <div class="form-group">
                                <label for="nisn">NISN :</label>
                                <input type="text" name="nisn" value="{{ old('nisn') }}" class="form-control rounded" id="nisn">
                                  @error('nisn')
                                      <small class="text-danger">{{ $message }}</small>
                                  @enderror
                              </div>
                            </div>
                            <div class="col-lg-4">
                              <div class="form-group">
                                <label for="nik">NIK :</label>
                                <input type="text" name="nik" value="{{ old('nik') }}" class="form-control rounded" id="nik">
                                  @error('nik')
                                      <small class="text-danger">{{ $message }}</small>
                                  @enderror
                              </div>
                            </div>
                            <div class="col-lg-4">
                              <div class="form-group">
                                <label for="jk">Jenis Kelamin :</label>
                                <select name="jenis_kelamin" id="jk" class="form-control rounded">
                                  <option selected disabled>-- Pilih Jenis Kelamin --</option>
                                  <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : ''  }}>Laki - Laki</option>
                                  <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : ''  }}>Perempuan</option>
                                </select>
                                  @error('jenis_kelamin')
                                      <small class="text-danger">{{ $message }}</small>
                                  @enderror
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label for="tempat">Tempat Lahir</label>
                                <input type="text" name="tmp_lahir" value="{{ old('tmp_lahir') }}" class="form-control rounded" id="tempat">
                                  @error('tmp_lahir')
                                      <small class="text-danger">{{ $message }}</small>
                                  @enderror
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label for="tanggal">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" value="{{ old('tgl_lahir') }}" class="form-control rounded" id="tanggal">
                                  @error('tgl_lahir')
                                      <small class="text-danger">{{ $message }}</small>
                                  @enderror
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control rounded" id="email">
                                  @error('email')
                                      <small class="text-danger">{{ $message }}</small>
                                  @enderror
                              </div>
                            </div>
                             <div class="col-lg-6">
                               <div class="form-group">
                                 <label for="no">No Telephone</label>
                                 <input type="number" name="no_telp" value="{{ old('no_telp') }}" class="form-control rounded" id="no">
                                  @error('no_telp')
                                      <small class="text-danger">{{ $message }}</small>
                                  @enderror
                              </div>
                             </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label for="psw">Password</label>
                                  <input type="password" name="password" class="form-control rounded" id="psw">
                                  @error('password')
                                      <small class="text-danger">{{ $message }}</small>
                                  @enderror
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label for="2_psw">Ulangi Password</label>
                                  <input type="password" name="password_confirmation" class="form-control rounded" id="2_psw">
                                  @error('password_confirmation')
                                      <small class="text-danger">{{ $message }}</small>
                                  @enderror
                                 </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <button class="btn btn-success" type="submit">Daftar</button>
                            </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

                @elseif($is_open->is_open == 2)

                    <div class="alert alert-info m-4" role="alert">
                        <h4 class="alert-heading text-center">Maaf, Pendaftaran Santri Baru Belum Dibuka !</h4>
                        <h6 class="text-center">Pendaftaran akan dimulai pada tanggal 1 September 2022 - 30 Juni 2023</h6>
                    </div>

                @endif


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
