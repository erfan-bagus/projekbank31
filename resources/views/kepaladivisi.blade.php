@section('title')
Kepala Divisi
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
              <li><a href="{{URL::route('manajemen')}}">Manajemen</a></li>
              <li>Kepala Divisi</li>
            </ul>

          </div>
          <div class="col-sm-1"></div>
        </div>

        <div class="container-fluid">
          <div class="col-sm-1"></div>
          <div class="col-sm-10">
            <img src="{{ asset('image')}}/manajemen/kepdiv_banner.png" alt="Los Angeles" style="width:100%;">
          </div>
          <div class="col-sm-1"></div>
        </div>
          </br>
          <!--BERITA-->

          <div class="container-fluid">

            <div class="col-sm-1"></div>
            <div class="col-sm-10">
              <div class="container-fluid" style="width:100%;background-color:#fff">
                <div class="col-sm-3">
                  <img src="{{ asset('image')}}/manajemen/pujiastuti.png" alt="Los Angeles" style="width:100%;">
                </div>
                <div class="col-sm-9">
                  <div class="contenta">
                    <div class="contenta">

                      <table class="table table-dark">
                        <tr>
                           <th bgcolor="#01417d">
                           <b>Kepala Divisi</b></th>
                        </tr>
                        </tr>
                      </table>

                       <table style="width:100%" class="table">
                        <tr>
                          <th>Nama Lengkap</th>
                          <td>Ny. Pudjiastuti</td>
                        </tr>
                        <tr>
                          <th>Tempat/Tgl. Lahir</th>
                          <td>Blitar, 18 April 1939</td>
                        </tr>
                        <tr>
                          <th>Bangsa</th>
                          <td>Indonesia</td>
                        </tr>
                        <tr>
                          <th>Alamat</th>
                          <td>Jl. Pemuda No.62, Sedayu, Muntilan</td>
                        </tr>
                        <tr>
                          <th>Pemegang Saham</th>
                          <td>67.50%</td>
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
                  <img src="{{ asset('image')}}/manajemen/arifin.png" alt="Los Angeles" style="width:100%;">
                </div>
                <div class="col-sm-9">
                  <div class="contenta">
                    <div class="contenta">

                      <table class="table table-dark">
                        <tr>
                           <th bgcolor="#01417d">
                           <b>Kepala Divisi</b></th>
                        </tr>
                        </tr>
                      </table>

                       <table style="width:100%" class="table">
                        <tr>
                          <th>Nama Lengkap</th>
                          <td>Arifin Koeswanto</td>
                        </tr>
                        <tr>
                          <th>Tempat/Tgl. Lahir</th>
                          <td>Tiongkok, 06 Februari 1936</td>
                        </tr>
                        <tr>
                          <th>Bangsa</th>
                          <td>Indonesia</td>
                        </tr>
                        <tr>
                          <th>Alamat</th>
                          <td>Jl. Raya Kertajaya Indah No.4, Surabaya</td>
                        </tr>
                        <tr>
                          <th>Pemegang Saham</th>
                          <td>20%</td>
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
                  <img src="{{ asset('image')}}/manajemen/ferlina.png" style="width:100%;">
                </div>
                <div class="col-sm-9">
                  <div class="contenta">
                    <div class="contenta">

                      <table class="table table-dark">
                        <tr>
                          <th bgcolor="#01417d">
                          <b>Kepala Divisi</b></th>
                        </tr>
                        </tr>
                      </table>

                       <table style="width:100%" class="table">
                        <tr>
                          <th>Nama Lengkap</th>
                          <td>Ny. Tjioe Ferlinna Koeswanto</td>
                        </tr>
                        <tr>
                          <th>Tempat/Tgl. Lahir</th>
                          <td>Surabaya, 29 April 1964</td>
                        </tr>
                        <tr>
                          <th>Bangsa</th>
                          <td>Indonesia</td>
                        </tr>
                        <tr>
                          <th>Alamat</th>
                          <td>Villa Bukit Regency 2 PD 2 / 28, Surabaya</td>
                        </tr>
                        <tr>
                          <th>Pemegang Saham</th>
                          <td>12.50%</td>
                        </tr>
                      </table>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-1"></div>
          </div>

        </content>
@endsection
