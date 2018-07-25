@section('title')
Pimpinan Cabang
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
              <li><a href="{{URL::route('tentangkami')}}">Tentang Kami</a></li>
              <li><a href="{{URL::route('manajemen')}}">Manajemen</a></li>
              <li>Pimpinan Cabang</li>
            </ul>

          </div>
          <div class="col-sm-1"></div>
        </div>

        <div class="container-fluid">
          <div class="col-sm-1"></div>
          <div class="col-sm-10">
            <img src="{{ asset('image')}}/manajemen/cbgbanner.png" alt="Los Angeles" style="width:100%;">
          </div>
          <div class="col-sm-1"></div>
        </div><br>


          <div class="container-fluid">

            <div class="col-sm-1"></div>
            <div class="col-sm-10">
              <div class="container-fluid" style="width:100%;background-color:#fff">
                <div class="col-sm-3">
                  <img src="{{ asset('image')}}/manajemen/klaten.PNG" alt="Los Angeles" style="width:100%;">
                </div>
                <div class="col-sm-9">
                  <div class="contenta">
                    <div class="contenta">

                      <table class="table table-dark">
                        <tr>
                          <th bgcolor="#01417d">
                          <b>Kepala Cabang Klaten</b></th>
                        </tr>
                        </tr>
                      </table>

                       <table style="width:100%" class="table">
                        <tr>
                          <th>Name Lengkap</th>
                          <td>RM. Prabawa</td>
                        </tr>
                        <tr>
                          <th>Tempat/Tgl. Lahir</th>
                          <td>Magelang, 7 Juli 1964</td>
                        </tr>
                        <tr>
                          <th>Bangsa</th>
                          <td>Indonesia</td>
                        </tr>
                        <tr>
                          <th>Alamat</th>
                          <td>Jl. Jeruk Agung, Srumbung, Magelang</td>
                        </tr>
                       
                        

                      </table>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-1"></div>
          </div>
          <br>
          <div class="container-fluid">

            <div class="col-sm-1"></div>
            <div class="col-sm-10">
              <div class="container-fluid" style="width:100%;background-color:#fff">
                <div class="col-sm-3">
                  <img src="{{ asset('image')}}/manajemen/sltg.PNG" alt="Los Angeles" style="width:100%;">
                </div>
                <div class="col-sm-9">
                  <div class="contenta">
                    <div class="contenta">

                      <table class="table table-dark">
                        <tr>
                          <th bgcolor="#01417d">
                          <b>Kepala Cabang Salatiga</b></th>
                        </tr>
                        </tr>
                      </table>

                      <table style="width:100%" class="table">
                        <tr>
                          <th>Name Lengkap</th>
                          <td>Wahyu Rohmanto</td>
                        </tr>
                        <tr>
                          <th>Tempat/Tgl. Lahir</th>
                          <td>Magelang, 25 September 1969</td>
                        </tr>
                        <tr>
                          <th>Bangsa</th>
                          <td>Indonesia</td>
                        </tr>
                        <tr>
                          <th>Alamat</th>
                          <td>Wonolelo, Muntilan Magelang</td>
                        </tr>
                        
                      

                      </table>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-1"></div>
          </div>
          <br>
          <div class="container-fluid">

            
            <div class="col-sm-1"></div>
          </div>

        
        </content>
@endsection
