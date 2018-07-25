@section('title')
Tabungan Arjuna - 13
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
              <li>Tabungan Arjuna - 13</li>
            </ul>

          </div>
          <div class="col-sm-1"></div>
        </div>
          <div class="container-fluid">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">

              <img src="{{ asset('image')}}/tabungan/banner_arjuna13.png" alt="Los Angeles" style="width:100%;">

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
                           <li>Merupakan tabungan khusus  yang berjangka waktu 36 bulan,</li>
                           <li>Tingkat suku bunga 1% /tahun,</li>
                           <li>Jumlah peserta 3.000 nomor, dan satu orang bisa memiliki lebih dari 1 rekening,</li>
                           <li>Penyetoran dilakukan setiap bulan sekali paling lambat tanggal 28 sebesar rp 100.000 secara pemindah bukuan dari tabungan parama atau tabungaku,</li>
                           <li>Penarikan tabungan dilakukan setiap bulan tanggal 28 dengan  hadiah-hadiah yang menarik,</li>
                           <li>Bunga tabungan dihitung atas saldo harian dan otomatis dipindahbukukan pada akhir bulan pada saat penghitungan bunga,</li>
                           <li>Nomor yang sudah keluar sebagai pemenang masih mempunyai kewajiban untuk setor sampai periode berakhir,</li>
                           <li>Hadiah langsung dipindahbukukan ke rekening tabungan parama atau tabunganku,</li>
                           <li>Hadiah dikenakan pajak sesuai ketentuan,</li>
                           <li>Biaya administrasi penutupan rekening sebesar rp. 12.000,-




                            </ul>




                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-1"></div>

          </div>

        </content>
@endsection
