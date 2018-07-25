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
          <h3>Buat Laporan Tahunan</h3>
      </div>

          <br>

          <br>


            <div style="width: 80s%">
              <div class="content">
                <form action="buatlaporantahunanaksi" method="post" enctype="multipart/form-data">


            <table border="1" style="width:100%">
            <tr>
              <th>Caption</th>
              <td><input placeholder="Caption" id="Username" type="text" class="validate" name="namafile" style="color: black;width: 100%"></td>
            </tr>
            <tr>
              <th>File</th>
              <td><input type="file" id="inputgambar" name="filepdf" class="validate"/ ></td>
            </tr>
            </table>
            <diV>
          <div style="text-align:center">
                <input type="submit" style="color: black;width: 300px;" name="Submit" value="Upload Laporan tahunan">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
              </form>
          </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif



      </div>
      </div>
      <div class="col-sm-1"></div>
    </div>
  </div>
<br>




@endsection
