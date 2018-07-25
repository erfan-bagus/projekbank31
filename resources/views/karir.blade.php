@section('title')
Karir
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
              <li>Karir</li>
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
                <h5><b>
                  SYARAT DAN KETENTUAN   •   INFORMASI LAIN •   DOWNLOAD
                </b></h5>
              </div>
              </div>
              <div class="pagecontent">
                <div class="contenta">
                  <div class="contenta">
                    <h5><b>Pendaftaran Lamaran Kerja</b></h5>
                  <ul>
                    <li>Pendaftaran lamaran kerja hanya dilakukan oleh PT. BPR Kembang Parama</li>
                    <li>Berkas Lamaran diserahkan LANGSUNG di masing- masing Kantor Cabang PT. BPR KEMBANG PARAMA dan/ atau dikirimkan Melalui Via Pos kemudian kirimkan ke alamat berikut : <br> 
                      &nbsp &nbsp - Kantor Pusat : Jl. Pemuda No. 12 Muntilan Magelang <br>
                      &nbsp &nbsp - Kantor Cabang Salatiga : Komplek Pertokoan Makutarama 3, Jl. A Yani No.3 Salatiga<br> 
                      &nbsp &nbsp - Kantor Cabang Klaten : Jl. Pemuda No. 209 Klaten <br>
                      &nbsp &nbsp - Kantor Pelayanan Kas : Ruko Prayudan Permai Blok A.15 Jl. Raya Mertoyudan Magelang.</li>
                    <li>BPR Kembang Parama membuka lowongan pekerjaan sebagaimana pada lowongan posisi pekerjaan yang diminati / sesuai.</li>
                  </ul>
                  <hr>
                  <h5><b>Informasi Lain</b></h5>
                <ul>
                  <li>Seluruh proses seleksi dan rekrutmen BPR Kembang Parama tidak dipungut biaya.</li>
                  <li>Keputusan panitia seleksi dan rekrutmen tidak dapat diganggu gugat.</li>
                  <li>Pertanyaan lain seputar rekrutmen, bisa disampaikan melalui email : kembangparama@gmail.com</li>
                </ul>
                <hr>
                <h5><b>Download</b></h5>
                <ul>
                @foreach ($file as $files)

                <li><a style="margin:0px 0px 0px 0px;" href="downloadfile/{{$files->id}}">{{$files->namalokasi}}</a></li>

              @endforeach
                </ul>
              <hr>






                  </div>

              </div>
            </div>
            <div class="col-sm-1"></div>

          </div></div>

        </content>
@endsection
