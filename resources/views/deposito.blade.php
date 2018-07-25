@section('title')
Deposito
@endsection
@extends('headfoo')
@section('content')

      <!-- MAIN START -->
      <!-- FIRST ROW -->

      <!-- FIRST ROW END -->
      <content>

        <div class="container-fluid">
          <div class="col-sm-1"></div>
          <div class="col-sm-10">
            <ul class="breadcrumba">
              <li><a href="{{URL::route('beranda')}}">Beranda</a></li>
              <li><a href="{{URL::route('layanan')}}">Layanan</a></li>
              <li>Deposito</li>
            </ul>

          </div>
          <div class="col-sm-1"></div>
        </div>
          <div class="container-fluid">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">

              <img src="{{ asset('image')}}/fix/karir/karir1.png" alt="Los Angeles" style="width:100%;">

        </div>
        <div class="col-sm-1"></div>
      </div>

          <!--BERITA-->
<br>
          <div class="container-fluid">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
              <div class="content">
              <div class="center">
                <h5>
                  <b>DEFINISI</b>
                </h5>
              </div>
              </div>
              <div class="pagecontent">
                <div class="contenta">
                  <div class="contenta">
                    <h5><b>DEFINISI</b></h5>
                         <ul>
                           Untuk jenis produk deposito yang ada saat ini deposito umum, dengan jangka waktu  1 bulan, 3 bulan, 6 bulan dan 12 bulan. Dengan pemberian tingkat suku bunga maksimal sama dengan penjaminan LPS, kami berharap akan mampu bersaing dengan Bank Umum.  Utuk tingkat suku bunga deposito di BPR berkisar antara 6,00% sampai dengan 8,25% per-tahunnya. Disamping itu deposito ini juga dapat dijadikan jaminan kredit di BPR Kembang Parama dengan tingkat suku bunga yang lebih rendah dengan kredit umum lainnya atau sesuai ketentuan intern bank.

                            </ul>




                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-1"></div>

          </div>

        </content>
@endsection
