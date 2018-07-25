<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="{{URL::asset('css/imagetab.css')}}"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">



<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #01417d;
  text-align:center;
  position: fixed; /* Set the navbar to fixed position */
top: 0; /* Position the navbar at the top of the page */
width: 100%; /* Full width */
z-index: 9;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  color: yellow;
  text-decoration: underline;
}

.hoverablediv a:hover {
  opacity: 0.5;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

.carousel-caption {
    right: 5%;
    text-align: right;
    background-color: black;
    max-width: 300px;
    left: auto;
    padding:5px;
}


#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #01417d;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: red;
}

div.a {
    width: auto;
    border: 1px solid black;
}

div.b {
    width: 150px;
    border: 1px solid black;
}

div.c {
    width: 24%;
    border: 1px solid white;
    background-color: #fff;
    float: left;
}
div.c2 {
    width: 1%;
    border: 1px solid white;
    float: left;
}
div.d {
    width: 49%;
    border: 1px solid  white;
    float: left;
}
div.e {
    width: 17%;
    border: 0px solid white;
    float: left;
}

div.content {
    padding : 10px 10px 10px 10px;
}

div.c-wrapper{
    width: 80%; /* for example */
    margin: auto;
}


.carousel-inner > .item > img,
.carousel-inner > .item > a > img{
width: 100%; /* use this, or not */
margin: auto;
}


</style>
</head>
<body background="{{ asset('image')}}/sbg.PNG">

  <header>
    <!--NAVBAR-->
    <div class="topnav" id="myTopnav">
      <div class="container">
      <div class="col-sm-1"><a href="#home" class="navbar-brand"><img height="25" src="{{ asset('image')}}/logo_header.png" align="left"></a></div>
      <div class="col-sm-1"></div>
      <div class="col-sm-10">

      <a href="#news"> </a>
      <a href="#news">Beranda</a>
      <a href="#contact">Tentang Kami</a>
      <a href="#about">Layanan</a>
      <a href="#contact">Karir</a>
      <a href="#about">Kontak Kami</a>
      <form class="navbar-form navbar-left" action="/action_page.php">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search" name="search">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
              <i class="glyphicon glyphicon-search"></i>
            </button>
          </div>
        </div>
      </form>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
    </div>
    </div>

    <!--NAVBAR-->
  </header>
</br>
</br>
</br>
  <content>
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
          <img src="{{ asset('image')}}/btn_slider.png" alt="New york" style="width:250px;">
        </div>
      </div>

      <div class="item">
        <img src="{{ asset('image')}}/hub_investor.png" alt="Chicago" style="width:100%;">
        <div class="carousel-caption" style="background-color:#f2f2f2">
          <img src="{{ asset('image')}}/btn_slider.png" alt="New york" style="width:250px;">
        </div>
      </div>

      <div class="item">
        <img src="{{ asset('image')}}/profil.png" alt="New York" style="width:100%;">
        <div class="carousel-caption" style="background-color:#f2f2f2">
          <img src="{{ asset('image')}}/btn_slider.png" alt="New york" style="width:250px;">
        </div>
      </div>

      <div class="item">
        <img src="{{ asset('image')}}/manajemen.png" alt="Managemen" style="width:100%;">
        <div class="carousel-caption" style="background-color:#f2f2f2">
          <img src="{{ asset('image')}}/btn_slider.png" alt="New york" style="width:250px;">
        </div>
      </div>

    </div>

    <!-- Left and right controls -->

  </div>
  </div>
  <div class="col-sm-1"></div>
</div>
<!--SLIDE-->
    </br>
    <!--TAB-->
    <div class="container-fluid">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
      <h3>BERITA</h3>
      <div class="w3-container">

        </div>

        <div class="w3-row-padding">
        <div class="w3-col s3 w3-container">
        <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Nature');">
          <img src="{{ asset('image')}}/slider3.png" alt="Nature" style="width:100%">
        </a>
        </div>
        <div class="w3-col s3 w3-container">
          <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Snow');">
            <img src="{{ asset('image')}}/slider3.png" alt="Snow" style="width:100%">
          </a>
        </div>
        <div class="w3-col s3 w3-container">
          <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Mountains');">
            <img src="{{ asset('image')}}/slider3.png" alt="Mountains" style="width:100%">
          </a>
        </div>
        <div class="w3-col s3 w3-container">
          <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Lights');">
            <img src="{{ asset('image')}}/slider3.png" alt="Lights" style="width:100%">
          </a>
        </div>
        </div><br>

        <div id="Nature" class="picture w3-display-container" style="display:none">
        <img src="{{ asset('image')}}/slider3.png" alt="Nature" style="width:100%">
        <span onclick="this.parentElement.style.display='none'"
        class="w3-display-topright w3-button w3-transparent w3-text-white">&times;</span>
        <div class="w3-display-bottomleft w3-container w3-padding w3-text-white">Nature</div>
        </div>

        <div id="Snow" class="picture w3-display-container" style="display:none">
        <img src="{{ asset('image')}}/slider3.png" alt="Snow" style="width:100%">
        <span onclick="this.parentElement.style.display='none'"
        class="w3-display-topright w3-button w3-transparent w3-text-white">&times;</span>
        <div class="w3-display-bottomleft w3-container w3-padding w3-text-white">Snow</div>
        </div>

        <div id="Mountains" class="picture w3-display-container" style="display:none">
        <img src="{{ asset('image')}}/slider3.png" alt="Mountains" style="width:100%">
        <span onclick="this.parentElement.style.display='none'"
        class="w3-display-topright w3-button w3-transparent">&times;</span>
        <div class="w3-display-bottomleft w3-container w3-padding w3-text-white">Mountains</div>
        </div>

        <div id="Lights" class="picture w3-display-container" style="display:none">
        <img src="{{ asset('image')}}/slider3.png" alt="Lights" style="width:100%">
        <span onclick="this.parentElement.style.display='none'"
        class="w3-display-topright w3-button w3-transparent w3-text-white">&times;</span>
        <div class="w3-display-bottomleft w3-container w3-padding w3-text-white">Northern Lights</div>
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
      <div class="col-sm-1"></div>
      <div class="col-sm-10" >

        <a href="...">
        <div class="c">
          <img src="{{ asset('image')}}/slider3.png" alt="Nature" style="width:100%">
          <div class="content" >
          <h3 style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 15ch;">JUDUL=========================================</h3>
          <h5 style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 20ch;">Bla......sajjjjjjjjjjjsdvsqeeeqeqcnsaaaaaaaaaaaaaaajsanjsansanlansascajsjasbjasbj</h5>
          <button class="btn btn-danger">Info selengkapnya > </button>
          </div>
        </div>
      </a>


      </div>
      <div class="col-sm-1"></div>

</div>
</div>
<!--BERITA-->
</br>

<div class="container-fluid">
    <div class="col-sm-1"></div>
    <!--TABEL-->
    <div class="col-sm-10" >
      <div class="d" style="background-color:#fff">
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
<div class="d" style="background-color:#fff">
  <div class="content" >
      <h2>Pengumuman</h2>
      <a href="#">
        <div class="card bg-light text-dark">
          <div class="card-body">Light card</div>
        </div>
      </a>
      <a href="#">
        <div class="card bg-light text-dark">
          <div class="card-body">Light card</div>
        </div>
      </a>
      <a href="#">
        <div class="card bg-light text-dark">
          <div class="card-body">Light card</div>
        </div>
      </a>
      <a href="#">
        <div class="card bg-light text-dark">
          <div class="card-body">Light card</div>
        </div>
      </a>
      <a href="#">
        <div class="card bg-light text-dark">
          <div class="card-body">Light card</div>
        </div>
      </a>
      <a href="#">
        <div class="card bg-light text-dark">
          <div class="card-body">Light card</div>
        </div>
      </a>
    </div>
    </div>
  </div>
    <!--PENGUMUMAN-->
    <div class="col-sm-1"></div>
</div>
  </content>

<footer>
  <button onclick="topFunction()" id="myBtn" title="Go to top">˄</button>
  <!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

    <!-- Footer Elements -->
    <div class="container-fluid" style="background-color:#1f7380">

      <!-- Social buttons -->
      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
          <a href="...">
          <img class="card-img-top" src="{{ asset('image')}}/email.png" alt="Card image cap" height="40" style=" padding-top: 10px">
          </a>
        </li>
        <li class="list-inline-item">
          <a href="...">
          <img class="card-img-top" src="{{ asset('image')}}/email.png" alt="Card image cap" height="40" style=" padding-top: 10px">
          </a>
        </li>
        <li class="list-inline-item">
          <a href="...">
          <img class="card-img-top" src="{{ asset('image')}}/email.png" alt="Card image cap"  height="40" style=" padding-top: 10px">
          </a>
        </li>

      </ul>
      <!-- Social buttons -->

    </div>
    <!-- Footer Elements -->
    <!-- Middle FOOTER -->
    <div class="container-fluid" style="background-color:#191970">
      <div class="container" style="background-color:#191970">
        <div class="col-sm-4">

              <h5 style="color:#fff; padding-top: 25px; font-family: Times, Serif;">
              KANTOR PUSAT
              </h5>
              <h6 style="color:#fff; padding-top: 25px; font-family: Times, Serif;">
              Jalan Pemuda No. 142 Semarang</br>
              Gedung Grinatha Lt. 1-7</br>
              Telp. (024) 355 4035-40 | Fax. (024) 354 0170
            </h6>

        </div>
        <div class="col-sm-4">
              <h5 style="color:#fff; padding-top: 25px; font-family: Times, Serif;">
                KONTAK KAMI</br>
                </br>
                <img src="{{ asset('image')}}/whatsapp.png"  height="25" style="">  Call Center 14066</br></br>
                <img src="{{ asset('image')}}/email.png"  height="25" style="">  sekretaris.perusahaan@bankjateng.co.id </br>
            </h5>
        </div>
        <div class="col-sm-4">
                <h5 style="color:#fff; padding-top: 25px; font-family: Times, Serif; text-align:center">
                  SOCIAL MEDIA</br>
                  </br>
                  <img src="{{ asset('image')}}/whatsapp.png"  height="25" style="">
                  <img src="{{ asset('image')}}/email.png"  height="25" style="">
                  <img src="{{ asset('image')}}/email.png"  height="25" style="">
                  <img src="{{ asset('image')}}/email.png"  height="25" style="">
                  <img src="{{ asset('image')}}/email.png"  height="25" style="">
              </h5>
        </div>
      </div>
    </div>
    <!-- Middle FOOTER -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" style="background-color:#01417d">
    <p style="color:#fff">Copyright ©2017 Bank Jateng. All rights reserved.</p>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
</footer>


<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
function openImg(imgName) {
  var i, x;
  x = document.getElementsByClassName("picture");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  document.getElementById(imgName).style.display = "block";
}
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

</script>

</body>
</html>
