@section('title')
Tabungan
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
              <li>Tabungan</li>
            </ul>

          </div>
          <div class="col-sm-1"></div>
        </div>

        <div class="container-fluid">
          <div class="col-sm-1"></div>
          <div class="col-sm-10">
            <img src="{{ asset('image')}}/fix/layanan/tabungan.png" alt="Los Angeles" style="width:100%;">
          </div>
          <div class="col-sm-1"></div>
        </div>
          </br>
          <!--BERITA-->

          <div class="container-fluid">

            <div class="col-sm-1"></div>
            <div class="col-sm-10" >
                <div class="hoverablediv">
              <a href="{{URL::route('tabunganumumparama')}}">
                <div class="col-md-4" style="height:450px; margin-top:20px; background-color:white;">
                  <div class="content" >
                    <h5 style="color:black;">
                    Tabungan Umum Parama
                  </h5><br><br>
                  </div>
                  <img src="{{ asset('image')}}/tabungan/umum.png" alt="Nature" style="width:100%;height:auto;">
                  <div class="content" >
                    Tabungan Umum Parama<br>
                    <br>

                    <br><br>
                  <button class="btn btn-primary  btn-sm">Info selengkapnya > </button>
                  </div>
                </div>
              </a>
         
            </div>
              <div class="hoverablediv">
              <a href="{{URL::route('tabunganku')}}">
                <div class="col-md-4" style="height:450px; margin-top:20px; background-color:white;">
                  <div class="content" >
                    <h5 style="color:black;">
                    TabunganKU
                    </h5><br><br>
                  </div>
                  <img src="{{ asset('image')}}/tabungan/tabunganku.png" alt="Nature" style="width:100%;height:auto;">
                  <div class="content" >
                    TabunganKu<br>
                    <br>

                    <br><br>
                  <button class="btn btn-primary  btn-sm">Info selengkapnya > </button>
                  </div>
                </div>
              </a>
        
            </div>
              <div class="hoverablediv">
              <a href="{{URL::route('tabungancitraparama4')}}">
                <div class="col-md-4" style="height:450px; margin-top:20px; background-color:white;">
                  <div class="content" >
                    <h5 style="color:black;">
                    Tabungan Citra Parama 4
                    </h5><br><br>
                  </div>
                  <img src="{{ asset('image')}}/tabungan/cp4.png" alt="Nature" style="width:100%;height:auto;">
                  <div class="content" >
                    Tabungan Citra Parama 4<br>

                    <br>
                    <br><br>
                  <button class="btn btn-primary  btn-sm">Info selengkapnya > </button>
                  </div>
                </div>
              </a>

            </div>
              <div class="hoverablediv">
              <a href="{{URL::route('tabunganarjuna11')}}">
                <div class="col-md-4" style="height:450px; margin-top:20px; background-color:white;">
                  <div class="content" >
                    <h5 style="color:black;">
                    Tabungan Arjuna – 11
                    </h5><br>
                  </div>
                  <img src="{{ asset('image')}}/tabungan/arjuna11.png" alt="Nature" style="width:100%;height:auto;">
                  <div class="content" >
                    Tabungan Arjuna – 11<br>

                    <br>
                    <br><br>
                  <button class="btn btn-primary btn-sm">Info selengkapnya > </button>
                  </div>
                </div>
              </a>
           
            </div>
              <div class="hoverablediv">
              <a href="{{URL::route('tabunganarjuna12')}}">
                <div class="col-md-4" style="height:450px; margin-top:20px; background-color:white;">
                  <div class="content" >
                    <h5 style="color:black;">
                    Tabungan Arjuna – 12
                    </h5><br>
                  </div>
                  <img src="{{ asset('image')}}/tabungan/arjuna12.png" alt="Nature" style="width:100%;height:auto;">
                  <div class="content" >
                    Tabungan Arjuna – 12<br>
                    <br>
                    <br><br>
                  <button class="btn btn-primary btn-sm">Info selengkapnya > </button>
                  </div>
                </div>
              </a>
     
            </div>
              <div class="hoverablediv">
              <a href="{{URL::route('tabunganarjuna13')}}">
                <div class="col-md-4" style="height:450px; margin-top:20px; background-color:white;">
                  <div class="content" >
                    <h5 style="color:black;">
                    Tabungan Arjuna – 13
                    </h5><br>
                  </div>
                  <img src="{{ asset('image')}}/tabungan/arjuna13.png" alt="Nature" style="width:100%;height:auto;">
                  <div class="content" >
                    Tabungan Arjuna – 13<br>


                    <br><br>
                  <button class="btn btn-primary btn-sm">Info selengkapnya > </button>
                  </div>
                </div>
              </a>

            </div>
              <div class="hoverablediv">
              <a href="{{URL::route('tabungansimpel')}}">
                <div class="col-md-4" style="height:450px; margin-top:20px; background-color:white;">
                  <div class="content" >
                    <h5 style="color:black;">
                    Tabungan SimPel
                    </h5><br><br>
                  </div>
                  <img src="{{ asset('image')}}/tabungan/simpel.png" alt="Nature" style="width:100%;height:auto;">
                  <div class="content" >
                    Tabungan SimPel<br>
                    <br>

                    <br><br>
                  <button class="btn btn-primary btn-sm">Info selengkapnya > </button>
                  </div>
                </div>
              </a>
         
            </div>
              <div class="hoverablediv">
              <a href="{{URL::route('tabunganharirayaqurmatasya')}}">
                <div class="col-md-4" style="height:450px; margin-top:20px; background-color:white;">
                  <div class="content" >
                    <h5 style="color:black;">
                    Tabungan Hari Raya, Tabungan Qurma, Tabungan Tasya
                    </h5><br>
                  </div>
                  <img src="{{ asset('image')}}/tabungan/berjangka.png" alt="Nature" style="width:100%;height:auto;">
                  <div class="content" >
                    Tabungan Hari Raya, Tabungan Qurma, Tabungan Tasya<br>
                    <br>

                    <br>
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
