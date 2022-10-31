@extends('layouts.landing')

@section('title', $title)

@push('after-style')

@endpush

@section('content')

    <section id="main-container" class="main-container">
   <div class="container">

      <div class="row text-center">
         <div class="col-12">
            <h3 class="section-sub-title mb-4">Biaya Pendidikan Santri</h3>
            <h4>Berikut rincian biaya pendidikan Santri Bahrul Maghfiroh Tahun 2022/2023</h4>
         </div>
      </div>
      <!--/ Title row end -->

      <div class="row">
        <div class="col-lg-12">
          <div class="table-responsive">
             <table id="pendidikan" class="table table-striped table-bordered" style="width:100%">
               <thead>
                 <tr>
                   <th class="text-center" width="6%">No</th>
                   <th class="text-center">Rincian</th>
                   <th class="text-center" width="35%">Biaya</th>
                 </tr>
               </thead>
               <tbody>
                    @php
                        $n=1;
                    @endphp
                @foreach ($biaya as $b)

                    <tr>
                        <td class="text-center">{{ $n; }}.</td>
                        <td>{{ $b->rincian }}</td>
                        <td>Rp. {{ number_format($b->biaya, 0) }}</td>
                    </tr>
                    @php
                        $n++;
                    @endphp
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        <h5 class="text-center">Total Biaya Pendidikan</h5>
                    </td>
                    <td>
                        <h5>Rp. {{ number_format($total) }}</h5>
                    </td>
                </tr>
            </tfoot>
             </table>
          </div>

          <div class="card mt-4">
            <div class="card-body">
              <p class="font-weight-bold">DP Pembayaran minimal Rp. 1.000.000</p>
              <p class="font-weight-bold">Pembayaran DP tidak bisa kembali jika mengundurkan diri</p>
              <p class="font-weight-bold">Pembayaran melalui rekening Bank BCA no.rek 1234567890 a.n Yayasan Luqman Al-Karim Abdullah Fattah</p>
            </div>
          </div>

        </div>
      </div><!-- Content row end -->

   </div><!-- Container end -->
</section>

@endsection

@push('after-script')

    <script>

            $(document).ready(function () {
                $('#pendidikan').DataTable();
            });

    </script>

@endpush
