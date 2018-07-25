@section('title')
Kredit Multi Guna
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
              <li><a href="{{URL::route('kredit')}}">Kredit</a></li>
              <li>Kredit Multi Guna</li>
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
                  <b>DEFINISI   • FITUR •   SYARAT & KETENTUAN</b>
                </h5>
              </div>
              </div>
              <div class="pagecontent">
                <div class="contenta">
                  <div class="contenta">
                    <h5><b>Definisi</b><br>
                      Kredit Multiguna sistem angsuran pokok dan bunga dibayar setiap bulan<br><br>
                      <hr>

              		       <br><b>Fitur :</b></h5>
                         <ul>
                        <li> <b>Parama Tani</b> <br> Pelayanan kredit untuk pembayaran usaha pertanian bersifat musiman</li>
                				<li> <b>Parama Niaga</b> <br> Pelayanan kredit untuk usah perdagangan / niaga</li>
                				<li> <b>Parama Griya</b> <br> Pelayanan kredit untuk pembelian / pembuatan rumah maupun properti</li>
                				<li><b> Parama pendidikan</b> <br> Pelayanan kredit untuk pembiayaan masih sekolah / kuliah</li>
                				<li> <b>Parama Trans</b> <br> Pelayanan kredit untuk pembiayaan usaha, jasa atau transportasi</li>
                				<li><b> Parama Suka Suka </b><br> Pelayanan kredit untuk keperluan yang konsumtif (pembelian tanah ataupun kendaraan pribadi)</li>
                      </ul>
                      <br><br><hr>
                      <h5><b>Syarat & Ketentuan :</b></h5>
                      <ul>
              			  <li>Suku bunga 0,92 % s.d 1,10 % per bulan flat.</li>
              			  <li>Plafon minimal Rp. 10.000.000,-</li>
              			  <li>Biaya provisi dan administrasi masing-masing sebesar 1,00 % per tahun.</li>
              			  <li>Jangka waktu minimal 24 bulan maksimal 72 bulan,</li>
              			  <li>Jaminan kendaraan roda 4 tahun 1995 s.d 2014 jangka waktu maksimal 36 bulan</li>
              			 <li>jaminan kendaraan roda 4 tahun 2015 keatas jangka waktu maksimal 48 bulan,</li>
              			  <li>Jaminan tanah dan bangunan lokasi pinggir jalan bisa akses mobil plafon maksimal 65% dari harga taksir,</li>
              			  <li>Jaminan berupa pekarangan kosong plafon maksimal 50% dari harga taksir,</li>
              			  <li>jaminan milik sendiri ( atas nama sendiri/suami/istri/anak yang sah),</li>
              			  <li>Pelunasa awal dikenakan pinalty sesuai ketentuan yang berlaku di bank.</li>
              			  <li>Syarat lainnya sama seperti persyaratan kredit pada umumnya</li>
                    </ul>





                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-1"></div>

          </div>

        </content>
@endsection
