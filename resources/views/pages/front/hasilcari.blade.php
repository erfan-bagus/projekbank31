@section('title')
Hasil Cari
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
              <li>Hasil Cari Pdf</li>
            </ul>

          </div>
          <div class="col-sm-1"></div>
</div>

          <div class="container-fluid">

            <div class="col-sm-1"></div>
            <div class="col-sm-10" >
@foreach ($files as $laporans)

<div class="hoverabledivi">
              <a href="downloadfile/{{$laporans->id}}">
                <div class="c3" style="height:200px">

                  <div class="content" >
                    <h6 style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 60ch;">
                  <img src="{{ asset('image')}}/pdfpic.PNG" alt="Nature"style="width:20%;height:auto;">
                      <b>
                        {{$laporans->nama}}<br>
                        {{$laporans->namalokasi}}
                      </br>
                    </b>
                    </h6>
                  <button class="btn btn-primary  btn-sm">DOWNLOAD </button>
                  </div>
                </div>
              </a>
              <div class="c2a"><p> </p></div>
                </div>
@endforeach
            </div>
            <div class="col-sm-1"></div>


      </div>

      <br>
      <div class="container-fluid">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
          <ul class="breadcrumba">
            <li><a href="{{URL::route('beranda')}}">Beranda</a></li>
            <li>Hasil Cari Berita</li>
          </ul>

        </div>
        <div class="col-sm-1"></div>
</div>
<div class="container-fluid">

  <div class="col-sm-1"></div>
  <div class="col-sm-10" >

    @foreach ($beritaatas as $files)

      <div class="hoverablediva">

      <a href="berita/{{$files->id}}">
      <div class="col-md-3 col-sm-10" style="background-color:#fff; height:380px" >
        <div class="center">
          <h3>
        <img class="img-responsive" src="{{ asset('gambarberita')}}/{{$files->gambarberita}}" alt="Nature" style="width:100%;height:auto;max-height:200px;">
      </h3>
        </div>
        <div class="content" >
        <h5 style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 15ch;"><b>{{$files->judul}}</b></h5><br>
        <p style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 20ch;">{{$files->konten}}</p>
        <p><a href="#" class="btn btn-warning  btn-sm" role="button">Info Selengkapnya</a></p>
        </div>
      </div>
      </a>
      <div class="c2a"> <p> </p> </div>
  </div>
      @endforeach




    </div>
  <div class="col-sm-1"></div>
</div>
<br>
<div class="container-fluid">
  <div class="col-sm-1"></div>
  <div class="col-sm-10">
    <ul class="breadcrumba">
      <li><a href="{{URL::route('beranda')}}">Beranda</a></li>
      <li>Hasil Cari Pengumuman</li>
    </ul>

  </div>
  <div class="col-sm-1"></div>
</div>
<div class="container-fluid">

<div class="col-sm-1"></div>
<div class="col-sm-10" >

@foreach ($beritabawah as $files)

  <a href="pengumuman/{{$files->id}}">
      <div class="card bg-light text-dark" style="margin-top : 5px;margin-bottom : 5px">
        <div class="card-body">
      <h6 style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 30ch;"><b>{{$files->judul}}</b></h6>
      </div>
      </div>
  </a>
@endforeach




</div>
<div class="col-sm-1"></div>
</div>
<br>
        </content>
@endsection
