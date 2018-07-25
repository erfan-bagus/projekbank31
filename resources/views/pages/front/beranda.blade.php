@section('title')
    Beranda
@endsection
@extends('layouts.headfoo')
@section('content')
    <div class="container-fluid">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <section class="homepage">

                <div class="row">
                    <div class="col">
                        <div id="homepage-slider" class="owl-carousel">
                            <a href="{{URL::route('beranda')}}">
                                <div><img src="{{ asset('image')}}/fix/slider1.png"></div>
                            </a>
                            <a href="{{URL::route('layanan')}}">
                                <div><img src="{{ asset('image')}}/fix/slider2.png"></div>
                            </a>
                            <a href="http://gobpr.id/">
                                <div><img src="{{ asset('image')}}/fix/slider3.png"></div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="content-title">Fitur</h2>
                    </div>
                    <div class="col">
                        <a href="{{URL::route('simulasi')}}">
                            <button class="w3-bar-item w3-button aktif"
                                    onclick="location.href='{{URL::route('simulasi')}}';"
                                    style="background-color:#fff;width:100%;padding: 20px 0;">

                                <i class="fa fa-calculator fa-3x"></i>
                                <span class="tulisan">SIMULASI</span>
                            </button>
                        </a>

                    </div>
                    <div class="col">
                        <a href="{{URL::route('kontakkami')}}">
                            <button class="w3-bar-item w3-button"
                                    onclick="location.href='{{URL::route('kontakkami')}}';"
                                    style="background-color:#fff;width:100%;padding: 20px 0;">
                        <i class="fa fa-map-marker fa-3x"></i>
                        <span class="tulisan">LOKASI</span>
                        </button>
                        </a>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="content-title">Berita | Kegiatan | Promo</h2>
                    </div>
                    <div class="col-lg-12">
                        <div id="news-top-carousel" class="owl-carousel">
                            @foreach ($beritaatas as $berita)
                                <div class="card">
                                    <img style="max-height:200px;" class="card-img-top"
                                         src="{{ asset('gambarberita')}}/{{$berita->gambarberita}}"
                                         alt="{{$berita->judul}}">
                                    <div class="card-body">
                                        <h6 class="card-title"><b>{{$berita->judul}}</b></h6>
                                        <div class="someDiv">
                                            <p class="card-text" style="color:grey;">{{$berita->konten}}</p>
                                        </div>
                                        <a href="berita/{{$berita->id}}" class="btn btn-warning btn-sm">
                                            Selengkapnya</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-12" style="text-align:center;">
                        <br>
                        <a href="beritalainnya">
                            <button class="btn btn-warning" style="margin-left:0px;"><b>LAINNYA </b></button>
                        </a>
                    </div>
                </div>

                <div class="feature-information">
                    <div class="row">
                        <div class="col-lg-12">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <table class="table table-bordered" style="background-color: #fff;">
                                <thead>
                                <tr style="color: #fff;background-color: #01417d;">
                                    <th colspan="5" style="text-align: center;">Suku Bunga Dasar</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style="text-align: center;width:50%;">LPS BPR Rate</td>
                                    <td style="text-align: center;width:50%;">8.5%</td>
                                </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered" style="background-color: #fff;">
                                <thead>
                                <tr style="color: #fff;background-color: #01417d;">
                                    <th colspan="5" style="text-align: center;">Tabungan</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style="text-align: center;">Umum</td>
                                    <td style="text-align: center;width:50%;">1%</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">Arjuna</td>
                                    <td style="text-align: center;">1%</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">Citra Parama 4</td>
                                    <td style="text-align: center;">1%</td>
                                </tr>
                                </tbody>
                            </table>

                            <table class="table table-bordered" style="background-color: #fff;">
                                <thead>
                                <tr style="color: #fff;background-color: #01417d;">
                                    <th colspan="5" style="text-align: center;">Deposito</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style="text-align: center;">1 Bulan</td>
                                    <td style="text-align: center;width:50%;">6%</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">3 Bulan</td>
                                    <td style="text-align: center;">6.5%</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">6 Bulan</td>
                                    <td style="text-align: center;">7%</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">12 Bulan</td>
                                    <td style="text-align: center;">7.5%</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                        <div class="col-lg-8">
                            <h2>Hot Tips</h2>
                            <div class="list-group">
                                @foreach ($beritabawah as $berita)
                                    <a href="pengumuman/{{$berita->id}}"
                                       class="list-group-item list-group-item-action">{{$berita->judul}}</a>
                                @endforeach
                                <a href="pengumumanlainnya">
                                    <button class="btn btn-warning" style="margin-top:10px"><b>LAINNYA </b></button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <link rel="stylesheet" href="{{URL::asset('addons/OwlCarousel/dist/assets/owl.carousel.min.css')}}">
            <link rel="stylesheet" href="{{URL::asset('addons/OwlCarousel/dist/assets/owl.theme.default.min.css')}}">
            <script src="{{URL::asset('addons/OwlCarousel/dist/owl.carousel.min.js')}}"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    $("#homepage-slider").owlCarousel({
                        items: 1,
                        loop: true,
                        margin: 10,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true
                    });
                    $("#news-top-carousel").owlCarousel({
                        items: 2,
                        loop: true,
                        margin: 20,
                        nav: true,
                        autoplay: true,
                        autoplayTimeout: 5000,
                        autoplayHoverPause: true
                    });
                });

                function openCity(cityName) {
                    var i;
                    var x = $('.city');

                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }

                    document.getElementById(cityName).style.display = "block";
                }
            </script>
        </div>
        <div class="col-sm-1"></div>
    </div>
@endsection
