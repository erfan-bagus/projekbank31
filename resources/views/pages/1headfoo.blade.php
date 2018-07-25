<!DOCTYPE html>
<html>
<head>
  <title>@yield('title') - BPR Kembang Parama</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="{{URL::asset('css/imagetab.css')}}"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link type="text/css" rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}"/>



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

ul.breadcrumba {
    padding: 10px 16px;
    list-style: none;
    background-color: #fff;
    text-align : right;
    font-family: Arial, Helvetica, sans-serif;
}
ul.breadcrumba li {
    display: inline;
    font-size: 18px;
}
ul.breadcrumba li+li:before {
    padding: 8px;
    color: black;
    content: "/\00a0";
}
ul.breadcrumba li a {
    color: #0275d8;
    text-decoration: none;
}
ul.breadcrumba li a:hover {
    color: #01447e;
    text-decoration: underline;
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
    border: 0px solid white;
    float: left;
}

div.c3 {
    width: 32%;
    border: 1px solid white;
    background-color: #fff;
    float: left;
    height: 350px;
}

div.c3 button {
    margin-left: 85px;
}

div.c3 h3 {
    text-align: center;
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

div.contenta {
    padding : 10px 10px 10px 10px;
}

div.pagecontent {
  width: 100%;
  background-color: #fff;
  float: left;
}

div.center h3 {
    text-align: center;
}

div.center h4 {
    text-align: center;
}

div.center h5 {
    text-align: center;
}

div.content h5 {
    text-align: center;
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

.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #01417d;
}


/* Create an active/current tablink class */
.tab button.active {
    background-color: #01417d;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}


.carousel {
  /* position is already relative by bootstrap default */
   because your header is fixed and has a height of 75px; */
}
.carousel-indicators {
    width: initial; /* initial resets css to default */
    margin-left: initial;
    left: initial;
    bottom: initial;
    right: -100px; /*horizontal position */
    top: 325px; /* vertical position */
}

.carousel-caption {
    width: initial; /* initial resets css to default */
    margin-left: initial;
    left: initial;
    bottom: initial;
    right: 175px; /*horizontal position */
    top: 225px; /* vertical position */
}
img.myImage {
    zoom: 2;  //increase if you have very small images

    display: block;
    margin: auto;

    height: auto;
    max-height: 100%;

    width: auto;
    max-width: 100%;
}
.disabled {
        pointer-events: none;
        cursor: default;
    }
</style>
</head>
<body background="{{ asset('image')}}/sbg.PNG">

  <header>
    <!--NAVBAR-->
    <div class="topnav" id="myTopnav">
      <div class="container-fluid">


      <div class="col-sm-12 col-xs-6" >
      <a href="{{URL::route('beranda')}}" class="navbar-brand"><img height="30px" src="{{ asset('image')}}/logo_header.png" align="left"></a>
      <a href="{{URL::route('beranda')}}">Beranda</a>
      <a href="{{URL::route('beranda')}}" class="disabled">|</a>
      <a href="{{URL::route('tentangkami')}}">Tentang Kami</a>
      <a href="{{URL::route('beranda')}}" class="disabled">|</a>
      <a href="{{URL::route('layanan')}}">Layanan</a>
      <a href="{{URL::route('beranda')}}" class="disabled">|</a>
      <a href="{{URL::route('karir')}}">Karir</a>
      <a href="{{URL::route('beranda')}}" class="disabled">|</a>
      <a href="{{URL::route('kontakkami')}}">Kontak Kami</a>
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
</br>
</br>
  <content>

<!--SLIDE-->
<main>
@yield('content')
</main>

<footer>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  <!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

    <!-- Footer Elements -->
    <div class="container-fluid" style="background-color:#c2c4ff">

      <!-- Social buttons -->
      <div>
      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
          <a href="...">
          <img class="img-responsive" class="card-img-top" src="{{ asset('image')}}/logo-ayo-ke-bank.png" alt="Card image cap" height="40" style=" padding-top: 10px">
          </a>
        </li>
        <li class="list-inline-item">
          <a href="...">
          <img class="img-responsive" class="card-img-top" src="{{ asset('image')}}/LPS-Logo-Vector.png" alt="Card image cap" height="40" style=" padding-top: 10px">
          </a>
        </li>
        <li class="list-inline-item">
          <a href="...">
          <img class="img-responsive" class="card-img-top" src="{{ asset('image')}}/ojk-logo.png" alt="Card image cap"  height="50px" style=" padding-top: 10px">
          </a>
        </li>
      </ul>
    </div>
      <!-- Social buttons -->

    </div>
    <!-- Footer Elements -->
    <!-- Middle FOOTER -->
    <div class="container-fluid" style="background-color:#191970">
      <div class="container" style="background-color:#191970;down:20px" >
        <div class="col-md-12 col-sm-12">
            <div class="col-sm-4">

                <h5 style="color:#fff; padding-top: 25px; font-family:  Arial, Helvetica, sans-serif;">
                KANTOR PUSAT
                </h5>
                <h5 style="color:#fff; padding-top: 25px; font-family:  Arial, Helvetica, sans-serif;">
                Jl Pemuda No. 12</br>
                Muntilan Muntilan  Magelang</br>
                Telp (0293) 586663,  587316 |</br> Fax. (0293) 587631
                </h5>
            </div>
            <div class="col-sm-4">
               <h5 style="color:#fff; padding-top: 25px; font-family:  Arial, Helvetica, sans-serif;">
                KONTAK KAMI</br>
                </br>
                <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>  Call center 14022</br></br>
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  kembangparama@gmail.com </br>
                </h5>
            </div>
            <div class="col-sm-4">
                <h5 style="color:#fff; padding-top: 25px; font-family:  Arial, Helvetica, sans-serif; text-align:center">
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
    </div>
    <!-- Middle FOOTER -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" style="background-color:#01417d">
    <p style="color:#fff">Copyright ©2017 BPR KEMBANG PARAMA. All rights reserved.</p>
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
