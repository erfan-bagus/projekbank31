<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/custom_style.css')}}">
    <script src="{{URL::asset('js/jquery-3.3.1.slim.min.js')}}"></script>


    <title>@yield('title') - BPR Kembang Parama</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/imagetab.css')}}"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway"/>
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}"/>
    <a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/custom_style.css')}}">
    <script src="{{URL::asset('js/jquery-3.3.1.slim.min.js')}}"></script>


    <!-- ICON NEEDS FONT AWESOME FOR CHEVRON UP ICON -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">


    <script type="text/javascript" src="{{ asset('/js/myjs.js') }}"></script>


    <style>
        body {
            margin: 0;
            font-family: 'Raleway';
        }

        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
        }

        .sticky + .content {
            padding-top: 60px;
        }

        .carousel-caption {
            right: 5%;
            text-align: right;
            background-color: black;
            max-width: 300px;
            left: auto;
            padding: 5px;
        }

        #return-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #fff;
            background: #fff;
            width: 50px;
            height: 50px;
            display: block;
            text-decoration: none;
            -webkit-border-radius: 35px;
            -moz-border-radius: 35px;
            border-radius: 35px;
            display: none;
            -webkit-transition: all 0.3s linear;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        #return-to-top i {
            color: #01417d;
            margin: 0;
            position: relative;
            left: 16px;
            top: 13px;
            font-size: 19px;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        #return-to-top:hover {
            background: #01417d;
        }

        #return-to-top:hover i {
            color: #fff;
            top: 5px;
        }

        ul.breadcrumba {
            padding: 10px 16px;
            list-style: none;
            background-color: #fff;
            text-align: right;
            font-family: 'Raleway';
            color: #708090;
        }

        ul.breadcrumba li {
            display: inline;
            font-size: 12px;
            color: #708090;
        }

        ul.breadcrumba li + li:before {
            padding: 8px;
            color: #708090;
            content: ">\00a0";
        }

        ul.breadcrumba li a {
            color: #708090;
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
            width: 1.2%;
            border: 0px solid white;
            float: left;
        }

        div.c2a {
            width: 1.2%;
            border: 0px solid white;
            float: left;
        }

        div.c49 {
            width: 49%;
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
            border: 1px solid white;
            float: left;
        }

        div.e {
            width: 17%;
            border: 0px solid white;
            float: left;
        }

        div.content {
            padding: 10px 10px 10px 10px;
        }

        div.contenta {
            padding: 10px 10px 10px 10px;
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

        div.c-wrapper {
            width: 80%; /* for example */
            margin: auto;
        }

        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
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
            because your header is fixed and has a height of 75px;
            */
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
            zoom: 2;
        / / increase if you have very small images display: block;
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

        th, td {
            padding: 5px 5px 5px 5px;
        }

        div.hoverablediva a {
            color: black;
        }

        div.hoverablediv img {
            height: 200px;
        }

        div.hoverablediv a {
            color: black;
        }

        .hoverablediv:hover {
            transform: scale(1.05);
        }

        div.hoverabledivi img {

        }

        div.hoverabledivi a {
            color: black;
        }

        .hoverabledivi:hover {
            transform: scale(1.05);
        }

        a.nav-link {
            color: #fff;
        }

        .truncate {
            white-space: nowrap;
            width: 250px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        pre {
            white-space: pre-wrap;
            border: 0;
            background-color: transparent;
            font-family: 'Raleway';
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
            background-color: #FF0000;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 50%;
        }

        .someDiv {
            line-height: 1.5em;
            height: 3em;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            width: 100%;
        }
    </style>
</head>
<body>

<br>
<br>
<br>
<br>
<br>
<div class="container-fluid">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <div style="background-color:#fff;padding: 5px 5px 5px 5px">
            <form class="form-inline my-2 my-lg-0" action="aksicari" method="post" enctype="multipart/form-data">

                <input style="width:80%" class="form-control mr-sm-2" type="search" placeholder="Search"
                       aria-label="Search" name="search">

                <button style="width:19%" class="btn " type="submit"><span class="glyphicon glyphicon-search"></span>
                </button>
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">

            </form>
        </div>
    </div>
    <div class="col-sm-1"></div>
</div>


@yield('content')


<footer>

    <footer class="page-footer font-small special-color-dark pt-4">

        <!-- Footer Elements -->
        <div class="container-fluid" style="background-color:#c2c4ff">

            <!-- Social buttons -->
            <div>
                <ul class="list-unstyled list-inline text-center">
                    <li class="list-inline-item">

                        <img class="card-img-top" src="{{ asset('image')}}/logo-ayo-ke-bank.png" alt="Card image cap"
                             style=" padding-top: 10px">

                    </li>
                    <li class="list-inline-item">

                        <img class="card-img-top" src="{{ asset('image')}}/LPS-Logo-Vector.png" alt="Card image cap"
                             style=" padding-top: 10px">

                    </li>
                    <li class="list-inline-item">

                        <img class="card-img-top" src="{{ asset('image')}}/ojk-logo.png" alt="Card image cap"
                             style=" padding-top: 10px">

                    </li>
                </ul>
            </div>
            <!-- Social buttons -->

        </div>
        <!-- Footer Elements -->
        <!-- Middle FOOTER -->
        <div class="container-fluid" style="background-color:#191970">
            <div class="container" style="background-color:#191970;down:20px">
                <div class="col-sm-4">

                    <p style="color:#fff; padding-top: 25px;  font-family: 'Raleway';">
                        KANTOR PUSAT
                        <br><br>
                        Jl Pemuda No. 12</br>
                        Muntilan Muntilan Magelang</br>
                        Telp (0293) 586663, 587316 |</br> Fax. (0293) 587631
                    </p>

                </div>
                <div class="col-sm-4">
                    <p style="color:#fff; padding-top: 25px;  font-family: 'Raleway';">
                        KONTAK KAMI</br>
                        </br>
                        <img src="{{ asset('image')}}/whatsapp.png" height="25" style=""> Call center 14022</br></br>
                        <img src="{{ asset('image')}}/email.png" height="25" style=""> kembangparama@gmail.com </br>
                    </p>
                </div>
                <div class="col-sm-4">
                    <p style="color:#fff; padding-top: 25px;  font-family: 'Raleway'; text-align:center">
                        SOCIAL MEDIA</br>
                        </br>
                        <a href="https://twitter.com/"> <img src="{{ asset('image')}}/twitter.png" height="25"
                                                             style="border-radius:50%"></a>
                        <a href="https://www.facebook.com/"> <img src="{{ asset('image')}}/facebook.png" height="25"
                                                                  style="border-radius:50%"></a>
                        <a href="https://plus.google.com/?hl=id"> <img src="{{ asset('image')}}/g+.png" height="25"
                                                                       style="border-radius:50%"></a>
                        <a href="https://www.instagram.com/?hl=id"> <img src="{{ asset('image')}}/instag.png"
                                                                         height="25" style="border-radius:50%"></a>
                        <a href="https://www.youtube.com/"> <img src="{{ asset('image')}}/yutub.png" height="25"
                                                                 style="border-radius:50%"></a>
                    </p>
                </div>
            </div>
        </div>
        <!-- Middle FOOTER -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3" style="background-color:#01417d">
            <p style="color:#fff;font-size: 10px;">Copyright ©2017 BPR KEMBANG PARAMA. All rights reserved.</p>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
</footer>

<button onclick="topFunction()" id="myBtn" title="Go to top"><img class="card-img-top"
                                                                  src="{{ asset('image')}}/unnamed.png"
                                                                  style="width:30px"></button>
<!-- Optional JavaScript -->
<!-- Bootstrap JS -->
<script src="{{URL::asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript">
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        // document.body.scrollTop = 0;
        // document.documentElement.scrollTop = 0;
        window.scroll({
            top: 0,
            behavior: 'smooth'
        });
    }

</script>
</body>
</html>
