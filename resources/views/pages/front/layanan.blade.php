@section('title')
Layanan
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
              <li>Layanan</li>
            </ul>

          </div>
          <div class="col-sm-1"></div>
</div>

          <div class="container-fluid">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">

              <img src="{{ asset('image')}}/fix/layanan/produknlayanan.png" alt="1" style="width:100%;">

        </div>
        <div class="col-sm-1"></div>
      </div>
          </br>
          <!--BERITA-->

          <div class="container-fluid">

            <div class="col-sm-1"></div>
            <div class="col-sm-10" >
              <div class="hoverablediv">
              <a href="{{URL::route('kredit')}}">
               <div class="col-md-4" style="height:485px; background-color:white">
                  <div class="content" >
                    <h5 style="color:black;">
                    Kredit
                    </h5>
                  </div>
                  <img src="{{ asset('image')}}/fix/layanan/kredit.png" alt="Nature" style="width:100%;height:auto;">
                  <div class="content" >
                    <h6 style="color:black;">
                      </a>
                        <a href="{{URL::route('kreditcerahinkusif')}}"style="text-decoration: none">Kredit Cerah Inklusif</a><br>
                        <a href="{{URL::route('kreditmultiguna')}}"style="text-decoration: none">Kredit Multiguna</a>
                        <a href="{{URL::route('kredit')}}">
                        </br></br></br></br></br></br></br></br>
                    </h6>
                  <button class="btn btn-primary  btn-sm">Info selengkapnya > </button>
                  </div>
                </div>
              </a>




            </div>
            <div class="hoverablediv">
              <a href="{{URL::route('tabungan')}}">
               <div class="col-md-4" style="height:485px; background-color:white">
                  <div class="content" >
                    <h5 style="color:black;">
                    Tabungan
                    </h5>
                  </div>
                  <img src="{{ asset('image')}}/fix/layanan/tabungan.png" alt="Nature" style="width:100%;height:auto;">
                  <div class="content" >
                    </a><h6 style="color:black;">
                        <a href="{{URL::route('tabunganumumparama')}}">Tabungan Umum Parama</a>
                        <br>
                        <a href="{{URL::route('tabunganku')}}">TabunganKu</a>
                        <br>
                        <a href="{{URL::route('tabungancitraparama4')}}">Tabungan Citra Parama 4</a>
                        <br>
                        <a href="{{URL::route('tabunganarjuna11')}}">Tabungan Arjuna – 11</a>
                        <br>
                        <a href="{{URL::route('tabunganarjuna12')}}">Tabungan Arjuna – 12</a>
                        <br>
                        <a href="{{URL::route('tabunganarjuna13')}}">Tabungan Arjuna – 13</a>
                        <br>
                        <a href="{{URL::route('tabungansimpel')}}">Tabungan SimPel</a>
                        <br>
                        <a href="{{URL::route('tabunganharirayaqurmatasya')}}">Tabungan Hari Raya, Tabungan Qurma, Tabungan Tasya</a>
                      </br>
                    </h6>
                    <a href="{{URL::route('tabungan')}}">
                  <button class="btn btn-primary  btn-sm">Info selengkapnya > </button>
                  </div>
                </div>
              </a>
            
            </div>
            <div class="hoverablediv">
              <a href="deposito">
               <div class="col-md-4" style="height:485px; background-color:white">
                  <div class="content" >
                    <h5 style="color:black;">
                    Deposito
                    </h5>
                  </div>
                  <img src="{{ asset('image')}}/fix/layanan/deposito.png" alt="Nature" style="width:100%;height:auto;">
                  <div class="content" >
                    <h6 style="color:black;">
                        <a href="{{URL::route('deposito')}}">Deposito</a>
                      </br></br></br></br></br></br></br></br><br>
                    </h6>
                  <button class="btn btn-primary btn-sm">Info selengkapnya > </button>
                  </div>
                </div>
              </a>
              </div>
            </div>
            <div class="col-sm-1"></div>

      </div>


        </content>
@endsection
