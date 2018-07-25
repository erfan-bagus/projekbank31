<!DOCTYPE html>
<html>
<head>
  <title>Panel Admin</title>
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
    border: 1px solid white;
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

div.pagecontent {
  width: 100%;
  background-color: #fff;
  float: left;
}

div.center h3 {
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

.title h3 {
  text-align: center;
}

body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 200px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #01417d;
    overflow-x: hidden;
    padding-top: 20px;
}

.sidenav a {
    padding: 6px 6px 6px 32px;
    text-decoration: none;
    font-size: 15px;
    color: #fff;
    display: block;
}

.sidenav a:hover {
  color: yellow;
  text-decoration: underline;
}
.topnav a:hover {
  color: yellow;
  text-decoration: underline;
}

.main {
    margin-left: 200px; /* Same as the width of the sidenav */
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body background="{{ asset('image')}}/sbg.PNG">

  <header>
    <div class="sidenav">
      <a href="{{URL::route('adminpage')}}" style="padding: 6px 6px 6px 6px;"><img width="180px" src="{{ asset('image')}}/logo_header.png" align="left"></a><br><br>
  <a href="{{URL::route('adminpage')}}">Panel Admin</a>
  <a href="{{URL::route('adminberita')}}">Atur Berita</a>
  <a href="{{URL::route('adminpengumuman')}}">Atur Pengumuman</a>
  <a href="{{URL::route('adminlaporankeuangan')}}">Atur Laporan Keuangan</a>
  <a href="{{URL::route('adminlaporantahunan')}}">Atur Laporan Tahunan</a>
  <a href="{{URL::route('adminlaporancgc')}}">Atur Laporan GCG</a>
  <a href="{{URL::route('adminaturpassword')}}">Atur Password</a>
  <a href="{{URL::route('logout')}}">Log Out</a>
</div>

<div class="main">


    <!--NAVBAR-->


    <!--NAVBAR-->
  </header>


<!--SLIDE-->
<main>
  <div class="container-fluid" >

    <div class="col-sm-12" style="background-color:#01417d;">
      <div class="content">
      <div class="title">
        <h3 style="color: #fff;padding: 20px 20px 20px 20px; align:center">Panel Admin</h3>
      </div>
    </div>
    </div>

  </div>

  @yield('content')
</main>

<footer>
  <button onclick="topFunction()" id="myBtn" title="Go to top">˄</button>
  <!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

    <!-- Footer Elements -->

    <!-- Middle FOOTER -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" style="background-color:#01417d">
    <p style="color:#fff">Copyright ©2018 BPR Kembang Parama. All rights reserved.</p>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
</footer>
</div>



</body>
</html>
