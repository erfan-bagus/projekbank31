@section('title')
{{$file->judul}}
@endsection
@extends('1headfoo')
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
              <li><a href="{{URL::route('beritalainnya')}}">Berita</a></li>
              <li>{{$file->judul}}</li>
            </ul>

          </div>
          <div class="col-sm-1"></div>
        </div>


          <!--BERITA-->
<br>
          <div class="container-fluid">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
              <div class="content">
              <div class="center">
                <h5>
                  <b>{{$file->judul}}</b>
                </h5>
              </div>
              </div>
              <div class="pagecontent">
                <div class="contenta">
                  <div class="contenta">
                      <img  src="{{ asset('gambarberita')}}/{{$file->gambarberita}}" alt="Nature" style="width:100%;">
                    <pre>{{$file->konten}}</pre>





                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-1"></div>

          </div>

        </content>
@endsection
