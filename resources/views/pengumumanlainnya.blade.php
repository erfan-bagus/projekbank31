@section('title')
Pengumuman Lainnya
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
              <li>Pengumuman Lainnya</li>
            </ul>

          </div>
          <div class="col-sm-1"></div>
        </div>

          <div class="container-fluid">
            <div class="hoverablediva">
            <div class="col-sm-1"></div>
            <div class="col-sm-10" >

              @foreach ($file as $files)



              <a href="pengumuman/{{$files->id}}">
                  <div class="card bg-light text-dark" style="margin-top : 5px;margin-bottom : 5px">
                    <div class="card-body">
                  <h6 style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 30ch;"><b>{{$files->judul}}</b></h6>
                  </div>
                  </div>
              </a>

                @endforeach

                <div style="text-align:center">
                      {{ $file->links() }}
                </div>



            </div>
            <div class="col-sm-1"></div>
</div>
        </content>
@endsection
