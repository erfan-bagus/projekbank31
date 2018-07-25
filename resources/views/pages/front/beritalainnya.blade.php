@section('title')
Berita Lainnya
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
              <li>Berita Lainnya</li>
            </ul>

          </div>
          <div class="col-sm-1"></div>
        </div>


          <div class="container-fluid">

            <div class="col-sm-1"></div>
            <div class="col-sm-10" >

              @foreach ($file as $files)

                <div class="hoverablediva">

                <a href="berita/{{$files->id}}">
                <div class="c3" style="background-color:#fff; height:380px" >
                  <div class="center">
                    <h3>
                  <img class="img-responsive" src="{{ asset('gambarberita')}}/{{$files->gambarberita}}" alt="Nature" style="width:100%;height:auto;;max-height:200px;"">
                </h3>
                  </div>
                  <div class="content" >
                    <h5 class="card-title"><b>{{$files->judul}}</b></h5>
                    <div class="someDiv">
                    <p class="card-text" style="color:grey;">{{$files->konten}}</p>
                  </div>
                  <p><a href="berita/{{$files->id}}" class="btn btn-warning  btn-sm" role="button">Info Selengkapnya</a></p>
                  </div>
                </div>
                </a>
                <div class="c2a"> <p> </p> </div>
            </div>
                @endforeach

                <div style="text-align:center">
                      {{ $file->links() }}
                </div>



              </div>
            <div class="col-sm-1"></div>
</div>
        </content>
@endsection
