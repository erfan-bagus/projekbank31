@section('title')
Admin
@endsection
@extends('adminpagetemplate')
@section('content')


  <div class="container-fluid" style="" >
    <div class="container" >
      <div class="col-sm-1"></div>
      <div class="col-sm-10" style="background-color:#fff">
        <div class="content">
        <div class="title">
          <h3>Atur File</h3>
      </div>

        <a href="{{URL::route('adminfileupload')}}">
          <div style="width: 100%;border:1px solid black;">
            <div class="content">
              <div class="title">
                <h3>Upload file</h3>
            </div>
            </div>
          </div>
        </a>
          <br>

          <br>
          @foreach ($file as $files)

            <div style="width: 100%;border:1px solid black;">
              <div class="content">
              <h4>Nama File: {{$files->nama}}
              </h4>
                <div style="text-align:right;">
                  <a href="downloadfile/{{$files->id}}">Download</a> | <a href="hapusfile/{{$files->id}}">Hapus</a>
                </div>
              </div>
            </div>
            <br>

          @endforeach



      </div>
      </div>
      <div class="col-sm-1"></div>
    </div>
  </div>
<br>




@endsection
