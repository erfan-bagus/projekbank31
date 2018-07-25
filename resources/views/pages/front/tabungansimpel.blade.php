@section('title')
Tabungan SimPel
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
              <li><a href="{{URL::route('tabungan')}}">Tabungan</a></li>
              <li>Tabungan SimPel</li>
            </ul>

          </div>
          <div class="col-sm-1"></div>
        </div>
          <div class="container-fluid">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">

              <img src="{{ asset('image')}}/tabungan/banner_simpel.png" alt="Los Angeles" style="width:100%;">

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
                  <b>SYARAT & KETENTUAN</b>
                </h5>
              </div>
              </div>
              <div class="pagecontent">
                <div class="contenta">
                  <div class="contenta">
                    <h5><b>Syarat & Ketentuan :</b></h5>
                         <ul>
                            <li>Merupakan tabungan perorangan bagi siswa PAUD, TK, SD, SLTP, SLTA</li>
                            <li>Pembukaan rekening dilakukan melalui kerjasama antara sekolah dengan Bank,</li>
                            <li>Setoran awal minimal Rp. 5.000,-setoran selanjutanya minimal Rp. 1.000,-</li>
                            <li>Saldo minimal Rp. 5.000,-</li>
                            <li>Tidak diberikan bunga tabungan, tetapi akan diberikan reward bagi sekolah sebesar 3,00% /tahun dan untuk siswa 1,00%/ tahun berdasar saldo rata-rata pengendapan,</li>
                            <li>Satu siswa satu rekening,</li>
                            <li>Penarikan tabungan dapat dilakukan maksimal 2 kali dalam satu bulan dengan nominal penarikan maksimal Rp. 250.000,-</li>
                            <li>Transaksi dapat dilakukan di sekolah maupun di Bank sesuai kebijakan bank,</li>
                            <li>Untuk siswa PAUD, TK dan SD orang tua ikut tanda tangan.</li>



                            </ul>




                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-1"></div>

          </div>

        </content>
@endsection
