@section('title')
Tentang Kami
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
              <li>Tentang Kami</li>
            </ul>

          </div>
          <div class="col-sm-1"></div>
</div>

          <div class="container-fluid">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">


              <img src="{{ asset('image')}}/fix/tentangkami/banner_tentangkami.png" alt="Los Angeles" style="width:100%;">

        </div>
        <div class="col-sm-1"></div>
      </div>
          </br>
          <!--BERITA-->

          <div class="container-fluid">

            <div class="col-sm-1"></div>
            <div class="col-sm-10" >

              <div class="hoverablediv">
              <a href="{{URL::route('profil')}}">
                <div class="c3" style="height:420px">
                  <div class="content" >
                    <h5 style="color:black;">
                    <b> Profil</b>
                    </h5>
                  </div>
                  <img src="{{ asset('image')}}/profill.png" alt="Nature" style="width:100%;height:auto;">
                  <div class="content" >
                    <h6 style="color:black;">
                        <a href="{{URL::route('profil')}}">Profil</a>
                        <br>
                        <a href="{{URL::route('profil')}}">Visi & misi</a>
                        <br>
                        <a href="{{URL::route('profil')}}">Struktur organisasi</a>
                        <br>
                        <a href="{{URL::route('profil')}}">Budaya perusahaan</a>
                      </br></br></br>
                    </h6>

                  </div>
                  <button onclick="location.href='{{URL::route('profil')}}';"   class="btn btn-primary btn-sm">Info selengkapnya > </button>
                </div>
              </a>
            </div>

            <div class="hoverablediv">
              <div class="c2"><p> </p></div>
              <a href="{{URL::route('hubunganinvestor')}}">
                <div class="c3" style="height:420px">
                  <div class="content" >
                    <h5 style="color:black;">
                    <b>Hubungan Investor</b>
                    </h5>
                  </div>
                  <img src="{{ asset('image')}}/hubinvestt.png" alt="Nature" style="width:100%;height:auto;">
                  <div class="content" >
                    <h6 style="color:black;">
                        <a href="{{URL::route('laporantahunan')}}">Laporan Tahunan</a>
                        <br>
                        <a href="{{URL::route('laporankeuangan')}}">Laporan Keuangan</a>
                        <br>
                        <a href="{{URL::route('laporancgc')}}">Laporan GCG</a>
                        <br>

                      </br></br></br>
                    </h6>
                  <button onclick="location.href='{{URL::route('hubunganinvestor')}}';"  class="btn btn-primary  btn-sm">Info selengkapnya > </button>
                  </div>
                </div>
              </a>
              <div class="c2"><p> </p></div>
              </div>
              <div class="hoverablediv">
              <a href="{{URL::route('manajemen')}}">
                <div class="c3" style="height:420px">
                  <div class="content" >
                    <h5 style="color:black;">
                    <b>Manajemen</b>
                    </h5>
                  </div>
                  <img src="{{ asset('image')}}/manajemmeendisp.jpg" alt="Nature" style="width:100%;height:auto;">
                  <div class="content" >
                    <h6 style="color:black;">


                        <a href="{{URL::route('dewankomisaris')}}">Dewan Komisaris</a>
                        <br>
                        <a href="{{URL::route('direksi')}}">Direksi</a>
                        <br>
                        <a href="{{URL::route('kepaladivisi')}}">Kepala Divisi</a>
                        <br>
                        <a href="{{URL::route('pimpinancabang')}}">Pimpinan Cabang</a>
                      </br></br><br>
                    </h6>
                  <div style="text-align: left">
                  <button onclick="location.href='{{URL::route('manajemen')}}';"  class="btn btn-primary  btn-sm">Info selengkapnya > </button>
                </div>
                  </div>
                </div>
              </a>
              </div>
            </div>
            <div class="col-sm-1"></div>

      </div>
      </div>

        </content>
@endsection
