@section('title')
Kontak Kami
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
              <li>Kontak Kami</li>
            </ul>

          </div>
          <div class="col-sm-1"></div>
        </div>


          <div class="container-fluid">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">

              <img src="{{ asset('image')}}/fix/kontak kami/cs.png" alt="Los Angeles" style="width:100%;">

        </div>
        <div class="col-sm-1"></div>
      </div>
          </br>

          <!--BERITA-->


  <div class="container-fluid">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">

      <div class="w3-bar w3-bluer">
      <button class="w3-bar-item w3-button" onclick="openCity('1')" style="width:33%"><div class="content">Pusat</div></button>
      <button class="w3-bar-item w3-button" onclick="openCity('2')"  style="width:33%"><div class="content">Cabang Salatiga</div></button>
      <button class="w3-bar-item w3-button" onclick="openCity('3')" style="width:33%"><div class="content">Cabang Klaten</div></button>

    </div>

    <div id="1" class="w3-container city" style="background-color:#fff">
      <div class="contenta">
        <div class="container-fluid">
          <div class="pagecontent">
          <div class="col-sm-4">
            <h5>
              <b>
              Cabang Pusat
            </b>
            </h5>
            <h5>
              Alamat : <br>
              Jl Pemuda No.12 Muntilan Magelang<br>
    		        Telp (0293) 586663,  587316<br>
                Fax. (0293) 587631
            </h5>
          </div>
          <div class="col-sm-8">
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d126558.82984480627!2d110.21067081092251!3d-7.578959502987475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x2e7a8a514a322683%3A0xb23fb310921defa8!2skembang+parama+muntilan!3m2!1d-7.5789651!2d110.2807114!5e0!3m2!1sen!2sid!4v1530362855809" width="600" height="450" frameborder="0" style="border:0;max-width: 100%;" allowfullscreen ></iframe>
          </div>
        </div>
        </div>
    </div>
    </div>

    <div id="2" class="w3-container city" style="display:none;background-color:#fff">
      <div class="contenta">
        <div class="container-fluid">
          <div class="pagecontent">
          <div class="col-sm-4">
            <h5>
              <b>
              Kantor Cabang Salatiga
              </b>
            </h5>
            <h5>
              Alamat : <br>
              Pertokoan Makutarama <br>
              Jl A Yani No.03 Salatiga<br>
    		      Telp Telp (0298) 315821
            </h5>
          </div>
          <div class="col-sm-8">
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d126629.84387572098!2d110.43499830933241!3d-7.333376980300802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x2e7a7833e0c5f1c5%3A0xfa4268751a487871!2skembang+parama+salatiga!3m2!1d-7.3333824!2d110.50503889999999!5e0!3m2!1sen!2sid!4v1530362975688" width="600" height="450" frameborder="0" style="border:0;max-width: 100%;" allowfullscreen></iframe>
          </div>
        </div>
        </div>
    </div>
    </div>

    <div id="3" class="w3-container city" style="display:none;background-color:#fff">
      <div class="contenta">
        <div class="container-fluid">
          <div class="pagecontent">
          <div class="col-sm-4">
            <h5>
              <b>
              Cabang Klaten
            </b>
            </h5>
            <h5>
              Alamat : <br>
              Jl. Pemuda No 209 Klaten<br>
    		      Telp (0272) 321100
          </div>
          <div class="col-sm-8">
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d126520.4244518327!2d110.52802101178244!3d-7.70853330959868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x2e7a440c17302517%3A0xad7d51189f66cd9e!2sbpr+kembang+parama+klaten!3m2!1d-7.708539!2d110.5980616!5e0!3m2!1sen!2sid!4v1530363105540" width="600" height="450" frameborder="0" style="border:0;max-width: 100%;" allowfullscreen></iframe>
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
