@section('title')
Tabungan Citra Parama 4
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
              <li>Tabungan Citra Parama 4</li>
            </ul>

          </div>
          <div class="col-sm-1"></div>
        </div>
          <div class="container-fluid">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">

              <img src="{{ asset('image')}}/tabungan/banner_cp4.png" alt="Los Angeles" style="width:100%;">

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
                          <li>Jumlah peserta 2.899 nomor terbagi 3 (tiga) bpr dan satu orang bisa memiliki lebih dari 1 rekening,</li>
                          <li>Penyetoran dilakukan setiap bulan sekali paling lambat tanggal 20 sebesar rp 100.000,-</li>
                          <li>Setiap 4 bulan diadakan penarikan dengan hadiah-hadiah yang menarik,</li>
                          <li>Setiap nomor yang sudah keluar sebagai pemenang, keikutsertaannya dinyatakan gugur dan sudah tidak mempunyai kewajiban setor lagi,</li>
                          <li>Biaya administrasi tutup rekening di akhir periode sebesar rp. 12.000,- </li>


                            </ul>




                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-1"></div>

          </div>

        </content>
@endsection
