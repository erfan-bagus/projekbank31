@section('title')
Laporan CGC
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
              <li><a href="{{URL::route('hubunganinvestor')}}">Hubungan Investor</a></li>
              <li>Laporan CGC</li>
            </ul>

          </div>
          <div class="col-sm-1"></div>
</div>

          <div class="container-fluid">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">


              <img src="{{ asset('image')}}/lap.gcg.png" alt="Los Angeles" style="width:100%;">

        </div>
        <div class="col-sm-1"></div>
      </div>
          </br>
          <!--BERITA-->

          <div class="container-fluid">

            <div class="col-sm-1"></div>
            <div class="col-sm-10" >
@foreach ($laporan as $laporans)

<div class="hoverabledivi">
              <a href="downloadfile/{{$laporans->id}}">
                <div class="c3" style="height:200px">

                  <div class="content" >
                    <h6 style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 60ch;">
                  <img src="{{ asset('image')}}/pdfpic.PNG" alt="Nature" style="width:20%;height:auto;">
                      <b>
                        {{$laporans->nama}}<br>

                      </br>
                    </b>
                    </h6>
                  <button class="btn btn-primary btn-sm">DOWNLOAD </button>
                  </div>
                </div>
              </a>
              <div class="c2a"><p> </p></div>
                </div>
@endforeach
            </div>
            <div class="col-sm-1"></div>


      </div>

        </content>
@endsection
