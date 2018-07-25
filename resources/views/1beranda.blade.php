@section('title')
Beranda
@endsection
@extends('1headfoo')
@section('content')

      <!-- MAIN START -->
      <!-- FIRST ROW -->

      <!-- FIRST ROW END -->
      <content>
          </br>
          <!--SLIDE-->



          <div class="container-fluid">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">

            <div class="item active">
              <img src="{{ asset('image')}}/banner_tentangkami.png" alt="Los Angeles" style="width:100%;">
              <div class="carousel-caption" style="background-color:#f2f2f2">
                <img class="img-responsive" src="{{ asset('image')}}/btn_slider.png" alt="New york" style="width:150px;">
              </div>
            </div>

            <div class="item">
              <img src="{{ asset('image')}}/hub_investor.png" alt="Chicago" style="width:100%;">
              <div class="carousel-caption" style="background-color:#f2f2f2">
                <img class="img-responsive" src="{{ asset('image')}}/btn_slider.png" alt="New york" style="width:150px;">
              </div>
            </div>

            <div class="item">
              <img src="{{ asset('image')}}/profil.png" alt="New York" style="width:100%;">
              <div class="carousel-caption" style="background-color:#f2f2f2">
                <img class="img-responsive" src="{{ asset('image')}}/btn_slider.png" alt="New york" style="width:150px;">
              </div>
            </div>

            <div class="item">
              <img src="{{ asset('image')}}/manajemen.png" alt="Managemen" style="width:100%;">
              <div class="carousel-caption" style="background-color:#f2f2f2">
                <img class="img-responsive" src="{{ asset('image')}}/btn_slider.png" alt="New york" style="width:150px;">
              </div>
            </div>

          </div>

          <!-- Left and right controls -->

        </div>
        </div>
        <div class="col-sm-1"></div>
      </div>
          <!--TAB-->
          <div class="container-fluid">
          <div class="col-md-1"></div>
          <div class="col-md-10">
            <br>
              <div class="w3-row-padding ">
              <div class="col-md-3 col-sm-5">
              <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Nature');">
                <img class="img-responsive" src="{{ asset('image')}}/produkfavtab.PNG" alt="Nature" style="width:100%">
              </a>
              </div>
              <div class="col-md-3 col-sm-5">
                <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Snow');">
                  <img class="img-responsive" src="{{ asset('image')}}/promoterkini.PNG" alt="Snow" style="width:100%">
                </a>
              </div>
              <div class="col-md-3 col-sm-5">
                <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Mountains');">
                  <img class="img-responsive" src="{{ asset('image')}}/simulasi.PNG" alt="Mountains" style="width:100%">
                </a>
              </div>
              <div class="col-md-3 col-sm-5">
                <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Lights');">
                  <img class="img-responsive" src="{{ asset('image')}}/lokasitab.PNG" alt="Lights" style="width:100%">
                </a>
              </div>
              </div><br>

              <div id="Nature" class="picture w3-display-container" style="display:none">
              <img class="img-responsive" src="{{ asset('image')}}/produkfav.PNG" alt="Nature" style="width:100%">
              <span onclick="this.parentElement.style.display='none'"
              class="w3-display-topright w3-button w3-transparent w3-text-white">&times;</span>
              <div class="w3-display-bottomleft w3-container w3-padding w3-text-white"> </div>
              </div>

              <div id="Snow" class="picture w3-display-container" style="display:none">
              <img class="img-responsive" src="{{ asset('image')}}/promoterkinii.PNG" alt="Snow" style="width:100%">
              <span onclick="this.parentElement.style.display='none'"
              class="w3-display-topright w3-button w3-transparent w3-text-white">&times;</span>
              <div class="w3-display-bottomleft w3-container w3-padding w3-text-white"> </div>
              </div>

              <div id="Mountains" class="picture w3-display-container" style="display:none">
              <img class="img-responsive" src="{{ asset('image')}}/simulasii.PNG" alt="Mountains" style="width:100%">
              <span onclick="this.parentElement.style.display='none'"
              class="w3-display-topright w3-button w3-transparent">&times;</span>
              <div class="w3-display-bottomleft w3-container w3-padding w3-text-white"> </div>
              </div>

              <div id="Lights" class="picture w3-display-container" style="display:none">
              <img class="img-responsive" src="{{ asset('image')}}/lokasitabi.PNG" alt="Lights" style="width:100%">
              <span onclick="this.parentElement.style.display='none'"
              class="w3-display-topright w3-button w3-transparent w3-text-white">&times;</span>
              <div class="w3-display-bottomleft w3-container w3-padding w3-text-white"> </div>
            </div>


          </div>
          <div class="col-sm-1"></div>
      </div>

          <!--TAB-->
          </br>
          <!--BERITA-->
          <div class="container-fluid">
            <div class="col-sm-1"></div>
            <div class="col-sm-10" >
              <h3>Berita | Kegiatan | Promo</h3>
            </div>
            <div class="col-sm-1"></div>
          </div>
          <div class="container-fluid">
            <div class="hoverablediv">
            <div class="col-md-1"></div>
            <div class="col-md-10" >

              @foreach ($beritaatas as $berita)


              <a href="...">
              <div class="col-md-3 col-sm-10" style="background-color:#fff; height:380px" >
                <div class="center">
                  <h3>
                <img class="img-responsive" src="{{ asset('gambarberita')}}/{{$berita->gambarberita}}" alt="Nature" style="height:200px;width:335px">
              </h3>
                </div>
                <div class="content" >
                <h5 style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 15ch;"><b>{{$berita->judul}}</b></h5><br>
                <p style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 20ch;">{{$berita->konten}}</p>
                <p><a href="#" class="btn btn-warning" role="button">Info Selengkapnya</a></p>
                </div>
              </div>
            </a>
            <div class="c2"> <p> </p> </div>
            @endforeach

            </div>
            <div class="col-sm-1"></div>

      </div>
      </div>
<br>
      <div class="container-fluid">
        <div class="col-md-1"></div>
        <div class="col-md-10 col-sm-3" >
          <p><a href="beritalainnya" class="btn btn-warning btn-block" role="button">LAINNYA</a></p>
        </div>
        <div class="col-md-1"></div>
      </div>
      <!--BERITA-->
      </br>

      <div class="container-fluid">
          <div class="col-md-1"></div>
          <!--TABEL-->
          <div class="col-md-10 " >
            <div class="col-md-5 col-sm-10 table-responsive" style="background-color:#fff">
              <table class="table">
                <thead>
                  <tr style="color: #fff;background-color: #01417d;">
                    <th colspan="3">Suku Bunga Dasar Kredit</th>
                    <th colspan="2">Per 30 Juni 2018</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td rowspan="2">Kredit Korporasi</td>
                    <td rowspan="2">Kredit Ritel</td>
                    <td rowspan="2">Kredit Mikro</td>
                    <td colspan="2">Kredit Konsumsi</td>

                  </tr>
                  <tr>
                    <td class="column-4">KPR</td>
                    <td class="column-5">NON KPR</td>

                  </tr>
                  <tr>
                    <td>7.55%</td>
                    <td>8.07%</td>
                    <td>7.22%</td>
                    <td>6.84%</td>
                    <td>10.83%</td>
                  </tr>
                </tbody>
              </table>
            </div>
          <!--TABEL-->
          <div class="c2"></div>
          <!--PENGUMUMAN-->
      <div class="col-md-7 col-sm-10" >

          <div style="height: 60px;width:100%;background-color:#fff">
            <div class="content">
            <h2>Pengumuman</h2>
          </div>
          </diV>

            @foreach ($beritabawah as $berita)


            <a href="#">
                <div class="card bg-light text-dark" style="margin-top : 5px;margin-bottom : 5px">
                  <div class="card-body">
                <h6 style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 30ch;"><b>{{$berita->judul}}</b></h6>
                </div>
                </div>
            </a>
            @endforeach
            <a href="beritalainnya">
              <button class="btn btn-warning" style="margin-left:0px"><b>LAINNYA </b> </button>
            </a>
          </div>
          </div>
        </div>
          <!--PENGUMUMAN-->
          <div class="col-sm-1"></div>
      </div>
        </content>
@endsection
