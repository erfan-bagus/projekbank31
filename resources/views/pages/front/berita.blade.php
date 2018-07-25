@section('title')
{{$file->judul}}
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
              <li><a href="{{URL::route('beritalainnya')}}">Berita</a></li>
              <li>{{$file->judul}}</li>
            </ul>

          </div>
          <div class="col-sm-1"></div>
        </div>


          <div class="container-fluid">
            <div class="col-sm-1"></div>
            <div class="col-sm-7">
              <div class="content">
              <div class="center">

              </div>
              </div>
              <div class="pagecontent">
                <div class="contenta">
                  <div class="contenta">
                    <div style="text-align:center">
                      <img style="max-height:200px;align:center;" src="{{ asset('gambarberita')}}/{{$file->gambarberita}}" alt="Nature" style="width:100%;">
                      <h5>
                        <b>{{$file->judul}}</b>
                      </h5>
                    </div>
                    <pre>{{$file->konten}}</pre>





                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3">

              <div style="height: 60px;width:100%;background-color:#fff">
                <div class="content">
                <h2>Berita</h2>
              </div>
              </diV>

                @foreach ($beritaatas as $berita)


                <a href="../berita/{{$berita->id}}">
                    <div class="card bg-light text-dark" style="margin-top : 5px;margin-bottom : 5px">
                      <div class="card-body">
                    <h6 style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 30ch;"><b>{{$berita->judul}}</b></h6>
                    </div>
                    </div>
                </a>
                @endforeach
                <a href="../beritalainnya">
                  <button class="btn btn-warning" style="margin-left:0px"><b>LAINNYA </b> </button>
                </a>




                      <div style="height: 60px;width:100%;background-color:#fff">
                        <div class="content">
                        <h2>Pengumuman</h2>
                      </div>
                      </diV>

                        @foreach ($beritabawah as $berita)


                        <a href="../pengumuman/{{$berita->id}}">
                            <div class="card bg-light text-dark" style="margin-top : 5px;margin-bottom : 5px">
                              <div class="card-body">
                            <h6 style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 30ch;"><b>{{$berita->judul}}</b></h6>
                            </div>
                            </div>
                        </a>
                        @endforeach
                        <a href="../pengumumanlainnya">
                          <button class="btn btn-warning" style="margin-left:0px"><b>LAINNYA </b> </button>
                        </a>


            </div>






            <div class="col-sm-1"></div>

          </div>

        </content>
@endsection
