@section('title')
Tabungan Hari Raya, Tabungan Qurma, Tabungan Tasya
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
              <li><a href="{{URL::route('tabungan')}}">Tabungan</a></li>
              <li>Tabungan Hari Raya, Tabungan Qurma, Tabungan Tasya</li>
            </ul>

          </div>
          <div class="col-sm-1"></div>
        </div>
          <div class="container-fluid">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">

              <img src="{{ asset('image')}}/tabungan/banner_berjangka.png" alt="Los Angeles" style="width:100%;">

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
                            <li>Penabung perorangan,</li>
                            <li>Jangka waktu minimal 12 bulan,</li>
                            <li>Besarnya setoran Rp. 50.000,- setiap bulan dan berlaku kelipatannya dan paling lambat akhir bulan,</li>
                            <li>Saldo minimal sebesar Rp. 20.000,- dan saldo tidak mendapatkan bunga minimal Rp. 20.000,-</li>
                            <li>Pengambilan dapat dilakukan menjelang hari raya, menjelang hari raya Idul Adha, menjelang berwisata,</li>
                            <li>Tingkat Suku bunga 1% / tahun,</li>
                            <li>Penabung lancar akan mendapatkan reward berupa barang sebesar 5% dari saldo tabungan pada saat pengambilan tabungan,</li>
                            <li>Bebas biaya administrasi setiap bulan,</li>
                            <li>Biaya penutupan rekening sebesar Rp. 7.500,-</li>




                            </ul>




                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-1"></div>

          </div>

        </content>
@endsection
