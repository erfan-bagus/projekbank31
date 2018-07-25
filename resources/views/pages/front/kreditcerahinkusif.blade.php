@section('title')
Kredit Cerah Inkusif
@endsection
@extends('layouts.headfoo')
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
              <li><a href="{{URL::route('kredit')}}">Kredit</a></li>
              <li>Kredit Cerah Inkusif</li>
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
                  <b>DEFINISI   •   SYARAT & KETENTUAN</b>
                </h5>
              </div>
              </div>
              <div class="pagecontent">
                <div class="contenta">
                  <div class="contenta">
                    <h5><b>Definisi</b>
                      <br>Kredit Cerah Inklusif dengan system angsuran pokok dan bunga dibayar setiap bulan<br><br>
                      <hr>

              		       <br><b>Syarat & Ketentuan :</b></h5>
                         <ul>
                         <li>Suku bunga 0,65 % s.d 1,05 % per bulan flat.</li>
    			 <li>Biaya provisi dan administrasi sebesar 1,00 % per tahun.</li>
    			 <li>Plafond minimal Rp. 10.000.000,- dengan jangka waktu maksimal 60 bulan.</li>
    			 <li>Jaminan kendaraan roda 2 tahun 2008 keatas, untuk roda 4 tahun 1995  sampai dengan tahun 2014 jangka waktu maksimal 36 bulan, plafon maksimal 65% dari harga taksir.</li>
    			 <li>Untuk jaminan mobil tahun 2015 keatas jangka waktu maksimal 48 bulan</li>
    			 <li>Jaminan sertifikat tanah dan bangunan ada akses jalan mobil, plafon maksimal 65% dari harga taksir.</li>
    			 <li>Jaminan sertifikat tanah kosong ada akses jalan mobil, plafon maksimal 50% dari harga taksir.</li>
    			 <li>Tanah tersebut milik sendiri ( atas nama sendiri/ suami/ istri/ anak yang sah ).</li>
    			 <li>Pelunasan awal dikenakan penalty sesuai ketentuan yang berlaku di PT BPR Kembang Parama.</li>
         </ul>




                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-1"></div>

          </div>

        </content>
@endsection
