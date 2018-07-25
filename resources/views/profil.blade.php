@section('title')
Profil
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
              <li><a href="{{URL::route('tentangkami')}}">Tentang Kami</a></li>
              <li>Profil</li>
            </ul>

          </div>
          <div class="col-sm-1"></div>
</div>

        <div class="container-fluid">
          <div class="col-sm-1"></div>
          <div class="col-sm-10">
            <img src="{{ asset('image')}}/banner_tentangkami.png" alt="Los Angeles" style="width:100%;">
          </div>
          <div class="col-sm-1"></div>
        </div>


  <div class="container-fluid">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">

      <div class="w3-bar w3-bluer">
      <button class="w3-bar-item w3-button" onclick="openCity('1')" style="width:25%"><div class="contenta">Profil</div></button>
      <button class="w3-bar-item w3-button" onclick="openCity('2')"  style="width:25%"><div class="contenta">Visi & Misi</div></button>
      <button class="w3-bar-item w3-button" onclick="openCity('3')" style="width:25%"><div class="contenta">Struktur Organisasi</div></button>
      <button class="w3-bar-item w3-button" onclick="openCity('4')" style="width:25%"><div class="contenta">Budaya Perusahaan</div></button>
    </div>

    <div id="1" class="w3-container city">
      <div class="contenta" style="background-color:#fff;">
        <div style="text-align: center">
      <img src="{{ asset('image')}}/profil11.png" alt="Los Angeles" style="width:48%;">
      <img src="{{ asset('image')}}/profil2.png" alt="Los Angeles" style="width:48%;">
    </div>
      <br><br>
      <h5><b>Profil</b></h5>
      <br>
      <pre style="font-family: 'Raleway';">


        PT Bank Perkreditan Rakyat ( BPR Kembang Parama ) secara resmi beridiri pada tanggal 14 Maret 1991, dengan :
        Akta   Notaris	:	Notaris Hendranata,  No. 326  Tertanggal 26 Mei 1990
        Ijin Prinsip	:	Keputusan Menteri Kehakiman Republik Indonesia
        Nomor : C2-4530-HT.01.01.TH 90  tgl 31 Juli 1990
        Ijin Usaha	:	Keputusan Menteri Keuangan Republik Indonesia
        No.Kep-054/KM.13/1991  tertanggal 25 Februari  1991


        Pada awal operasional PT BPR Kembang Parama menempati gedung di Ruko PJKA AI/5 Muntilan, dan seiring dengan
        berjalannya waktu mengalami perluasan gedung dengan menambah ruko disebelahnya yaitu Ruko PJKA AI/4.
        Selanjutnya guna meningkatkan pelayanan kepada para nasabah, PT BPR Kembang membuka Kantor Pelayanan Kas di
        Ruko Prayudan Permai Blik A no 15 Mertoyudan Magelang dengan Persetujuan Bank Indonesia No. 4/1111/DP BPR/ID
        BPR/Sm   tertanggal 7 Juni 2002.

        Selanjutnya manajemen bank mengembangkan pasar dengan membuka Kantor Cabang yang pertama di Kotamadya Salatiga
        dengan ijin Bank Indonesia No 6/1150 DPBPR/IDBPR/Sm tertanggal 26 Mei 2004 dan secara resmi mulai beroperasi
        pada tanggal 19 Juni 2004 di Pertokoan makutarama Jl A Yani no 9 A. Dalam perjalanan berikutnya guna
        meningkatkan performance Kantor Cabang Salatiga berpindah alamat di Pertokoan Makutarama Jl A Yani No 3 dengan
        pertimbangan tempatnya lebih luas.

        Dalam perkembangan berikutnya manajemen terus melakukan perluasan jaringan kantor dengan membuka Kantor Cabang
        di Kabupaten Klaten dengan :
        Ijin Prinsip	:	No 13/1813/DKBU/IDad/Sm tertanggal 30 November 2011
        Ijin Operasional	:	No 14/293/DKBU/IDad/Sm tertanggal 21 Februari 2012
        Dan secara resmi mulai beroperasi pada tanggal  8 Maret 2012 di Jalan Pemuda No 209 Klaten.
        Mengingat semakin meningkatnya kinerja dan semakin meningkatnya kepercayaan masyarakat terhadap PT BPR Kembang Parama,
        maka manajemen memandang perlu untuk meningkatkan performance bank secara lebih baik. Guna memenuhi hal tersebut, maka
        manajemen mulai tahun 2013 membangun gedung baru untuk kantor pusat yang terletak di Jalan Pemuda No 12 Muntilan,
        dengan luas tanah hasil pembelian seluas 510 m2, yang dibangun untuk 3 lantai. Pada perkembangannya pembangunan gedung
        telah selesai dan siap ditempati pada bulan September 2014. Pada tanggal 13 November 2014 memperoleh persetujuan
        pemindahan alamat kantor ke  gedung baru dengan surat persetujuan OJK No. S-340/KR.41/2014, dan secara resmi kantor
        pusat PT BPR Kembang Parama pindah alamat ke gedung baru pada tanggal 26 November 2014.

      </pre>
    </div>
    </div>

    <div id="2" class="w3-container city" style="display:none">
      <div class="contenta" style="background-color:#fff; text-align:center">
      <h5><b>Visi & Misi</b></h5>
      <pre style="font-family: 'Raleway';">
        <b>VISI</b>
        Menjadi BPR yang terdepan dan Terpercaya
        <b>MISI</b>
        Meningkatkan kinerja BPR yang sehat, inovatif dan mampu memberikan kontribusi nyata dalam peningkatan kesejahteraan
      </pre>
    </div>
    </div>

    <div id="3" class="w3-container city" style="display:none">
      <div class="contenta" style="background-color:#fff;">
      <h5><b>Struktur Organisasi</b></h5>
      <img style="width:100%;height:auto;" src="{{ asset('image/fix')}}/strukturorgan.png" align="center">
    </div>
    </div>

    <div id="4" class="w3-container city" style="display:none">
      <div class="contenta" style="background-color:#fff;">
      <div class="contenta" style="background-color:#fff;">
        <div class="contenta" style="background-color:#fff;">
          <div class="contenta" style="background-color:#fff;">
      <h5><b>Budaya Perusahaan</b></h5>
      <pre style="font-family: 'Raleway';">
     <b>KEMBANGPARAMA</b> :
     <b>K</b><span style="color:grey">reatif</span>
     <b>E</b><span style="color:grey">xcelent</span>
     <b>M</b><span style="color:grey">otivasi</span>
     <b>B</b><span style="color:grey">rilliant</span>
     <b>A</b><span style="color:grey">ssertif</span>
     <b>N</b><span style="color:grey">ormatif</span>
     <b>G</b><span style="color:grey">igih</span>
     <b>P</b><span style="color:grey">ositif thinking</span>
     <b>A</b><span style="color:grey">daptatif</span>
     <b>RAMA</b><span style="color:grey">h</span>
      </pre>
    </div>
    </div>
    </div>
    </div>
    </div>

    <script>
    function openCity(cityName) {
        var i;
        var x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";
        }
        document.getElementById(cityName).style.display = "block";
    }
    </script>

    </div>
    <div class="col-sm-1"></div>

  </div>

        </content>
@endsection
