@section('title')
Manajemen
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
              <li>Manajemen</li>
            </ul>

          </div>
          <div class="col-sm-1"></div>
        </div>

        <div class="container-fluid">
          <div class="col-sm-1"></div>
          <div class="col-sm-10">
            <img src="{{ asset('image')}}/mngmn.png" alt="Los Angeles" style="width:100%;">
          </div>
          <div class="col-sm-1"></div>
        </div>
          </br>
          <!--BERITA-->

          <div class="container-fluid">

            <div class="col-sm-1"></div>
            <div class="col-sm-10">
              <div class="hoverablediv">
              <a href="{{URL::route('dewankomisaris')}}">
                <div class="c3" style="height:420px; margin-top:20px">
                  <div class="content" >
                    <h5 style="color:black;">
                    Dewan Komisaris
                    </h5>  <br>
                  </div>
                  <img src="{{ asset('image')}}/manajemen/komiarisss.png" style="width:100%;height:auto;">
                  <div class="content" >
                    Dewan Komisaris<br>
                    <br>

                    </br></br>
                  <button class="btn btn-primary  btn-sm">Info selengkapnya > </button>
                  </div>
                </div>
              </a>
            </div>
              <div class="hoverablediv">
              <div class="c2"><p> </p></div>

              <a href="{{URL::route('direksi')}}">
                <div class="c3" style="height:420px; margin-top:20px">
                  <div class="content" >
                    <h5 style="color:black;">
                    Direksi
                    </h5><br>
                  </div>
                  <img src="{{ asset('image')}}/manajemen/direksssi.png" style="width:100%;height:auto;">
                  <div class="content" >
                    Direksi<br>
                    <br>

                    </br></br>
                  <button class="btn btn-primary  btn-sm">Info selengkapnya > </button>
                  </div>
                </div>
              </a>

              <div class="c2"><p> </p></div>
            </div>
              <div class="hoverablediv">
              <a href="{{URL::route('kepaladivisi')}}">
                <div class="c3" style="height:420px; margin-top:20px">
                  <div class="content" >
                    <h5 style="color:black;">
                    Kepala Divisi
                    </h5><br>
                  </div>
                  <img src="{{ asset('image')}}/manajemen/kepdiv.png" style="width:100%;height:auto;">
                  <div class="content" >
                    Kepala Divisi<br>

                    <br>
                    </br></br>
                  <button class="btn btn-primary  btn-sm">Info selengkapnya > </button>
                  </div>
                </div>
              </a>

            </div>
              <div class="hoverablediv">
              <a href="{{URL::route('pimpinancabang')}}">
                <div class="c3" style="height:420px; margin-top:20px">
                  <div class="content" >
                    <h5 style="color:black;">
                    Pimpinan Cabang
                    </h5><br>
                  </div>
                  <img src="{{ asset('image')}}/manajemen/kplcbg.png" style="width:100%;height:auto;">
                  <div class="content" >
                    Pimpinan Cabang<br>

                    <br>
                    </br></br>
                  <button class="btn btn-primary  btn-sm">Info selengkapnya > </button>
                  </div>
                </div>
              </a>
              <div class="c2"><p> </p></div>


            </div>




            </div>
            <div class="col-sm-1"></div>
          </div>
        </content>
@endsection
