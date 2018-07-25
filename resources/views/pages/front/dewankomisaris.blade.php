@section('title')
Dewan Komisaris
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
              <li><a href="{{URL::route('tentangkami')}}">Tentang Kami</a></li>
              <li><a href="{{URL::route('manajemen')}}">Manajemen</a></li>
              <li>Dewan Komisaris</li>
            </ul>

          </div>
          <div class="col-sm-1"></div>
        </div>

        <div class="container-fluid">
          <div class="col-sm-1"></div>
          <div class="col-sm-10">
            <img src="{{ asset('image')}}/manajemen/komisaris_banner.png" style="width:100%;">
          </div>
          <div class="col-sm-1"></div>
        </div><br>

          <div class="container-fluid">

            <div class="col-sm-1"></div>
            <div class="col-sm-10">
              <div class="container-fluid" style="width:100%;background-color:#fff">
                <div class="col-sm-3">
                  <img src="{{ asset('image')}}/manajemen/yangki.PNG" alt="Los Angeles" style="width:100%;">
                </div>
                <div class="col-sm-9">
                  <div class="contenta">
                    <div class="contenta">
                      <h4><b>Komisaris Utama : Sukotjo Mangun Rahardjo</b></h4>
                      <br>
                      <br>
                      <p>Sukotjo Mangun Rahardjo atau yang terkenal dengan panggilan Yangki Lahir di Magelang, 02 Oktober 1966 adalah seorang profesional Indonesia yang pernah menjabat sebagai Komisaris Utama di BPR Kembang Parama Muntilan dan juga BPR Artha Sambhara Borobudur. Yangki bertempat tinggal di Jalan Pemuda No.62, Sedayu Muntilan. Yangki juga dikenal dengan kekuatannya dalam membina seluruh karyawan dan pimpinan dalam meningkatkan kinerja, dan terbukti dari kinerja yang meningkat di 3 BPR</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-1"></div>
          </div>
          <br>
          <div class="container-fluid">


            <div class="col-sm-1"></div>
          </div>
        </content>
@endsection
