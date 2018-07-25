@section('title')
Hubungan Investor
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
              <li>Hubungan Investor</li>
            </ul>

          </div>
          <div class="col-sm-1"></div>
</div>

          <div class="container-fluid">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">


              <img src="{{ asset('image')}}/fix/tentangkami/hub_investor.png" alt="Los Angeles" style="width:100%;">

        </div>
        <div class="col-sm-1"></div>
      </div>
          </br>
          <!--BERITA-->

          <div class="container-fluid">

            <div class="col-sm-1"></div>
            <div class="col-sm-10" >
              <div class="hoverablediv">
              <a href="{{URL::route('laporankeuangan')}}">
                <div class="col-md-4" style="height:350px;background-color: white">
                  <div class="content" >
                    <h5 style="color:black;">
                    Laporan Keuangan
                    </h5>
                  </div>
                  <img src="{{ asset('image')}}/lk.png" alt="Nature"  style="width:100%;height:auto;">
                  <div class="content" >
                    <h6 style="color:black;">
                        Laporan Keuangan</br></br>
                    </h6>
                  <button class="btn btn-primary">Info selengkapnya > </button>
                  </div>
                </div>
              </a>
              </div>

              <div class="hoverablediv">

              </div>
              <div class="hoverablediv">
              <a href="{{URL::route('laporantahunan')}}">
                <div class="col-md-4" style="height:350px;background-color: white">
                  <div class="content" >
                    <h5 style="color:black;">
                    Laporan Tahunan
                    </h5>
                  </div>
                  <img src="{{ asset('image')}}/lt.png" alt="Nature"  style="width:100%;height:auto;">
                  <div class="content" >
                    <h6 style="color:black;">
                        Laporan Tahunan</br></br>
                    </h6>
                  <button class="btn btn-primary">Info selengkapnya > </button>
                  </div>
                </div>
              </a>

            </div>
            <div class="hoverablediv">
              <a href="{{URL::route('laporancgc')}}">
                <div class="col-md-4" style="height:350px;background-color: white">
                  <div class="content" >
                    <h5 style="color:black;">
                    Laporan GCG
                    </h5>
                  </div>
                  <img src="{{ asset('image')}}/gcg.png" alt="Nature"  style="width:100%;height:auto;">
                  <div class="content" >
                    <h6 style="color:black;">
                        Laporan GCG</br></br>
                    </h6>
                  <button class="btn btn-primary">Info selengkapnya > </button>
                  </div>
                </div>
              </a>
              </div>
            </div>
            <div class="col-sm-1"></div>


      </div>

        </content>
@endsection
