@section('title')
Kredit
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
              <li>Kredit</li>
            </ul>

          </div>
          <div class="col-sm-1"></div>
        </div>

        <div class="container-fluid">
          <div class="col-sm-1"></div>
          <div class="col-sm-10">
            <img src="{{ asset('image')}}/fix/layanan/kredit.png" alt="Los Angeles" style="width:100%;">
          </div>
          <div class="col-sm-1"></div>
        </div>

          <div class="container-fluid">

            <div class="col-sm-1"></div>
            <div class="col-sm-10" >
              <div class="hoverablediv">
              <a href="{{URL::route('kreditcerahinkusif')}}">
                <div class="col-md-4" style="height:420px;background-color:white">
                  <div class="content" >
                    <h5 style="color:black;">
                    Kredit Cerah Inklusif
                    </h5>
                  </div>
                  <img src="{{ asset('image')}}/fix/layanan/kredit.png" alt="Nature" style="width:100%;height:auto;">
                  <div class="content" >
                    Kredit Cerah Inklusif<br>
                    <br>
                    <br>
                    </br></br>
                  <button class="btn btn-primary  btn-sm">Info selengkapnya > </button>
                  </div>
                </div>
              </a>
            </div>


              <div class="hoverablediv">
              <a href="{{URL::route('kreditmultiguna')}}">
                <div class="col-md-4" style="height:420px;background-color:white">
                  <div class="content" >
                    <h5 style="color:black;">
                    Kredit Multiguna
                    </h5>
                  </div>
                  <img src="{{ asset('image')}}/fix/layanan/kredit.png" alt="Nature" style="width:100%;height:auto;">
                  <div class="content" >
                  Kredit Multiguna<br>
                  <br>
                  <br>
                  </br></br>
                  <button class="btn btn-primary  btn-sm">Info selengkapnya > </button>
                  </div>
                </div>
              </a>
            </div>
           


            </div>
            <div class="col-sm-1"></div>


      </div>

        </content>
@endsection
