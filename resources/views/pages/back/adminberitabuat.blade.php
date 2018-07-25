@section('title')
Admin
@endsection
@extends('layouts.adminpagetemplate')
@section('content')


  <div class="container-fluid" style="" >
    <div class="container" >
      <div class="col-sm-1"></div>
      <div class="col-sm-10" style="background-color:#fff">
        <div class="content">
        <div class="title">
          <h3>Buat Berita</h3>
      </div>

          <br>

          <br>


            <div style="width: 80s%">
              <div class="content">
                <form action="buatberitaaksi" method="post" enctype="multipart/form-data">


            <table border="1" style="width:100%">
            <tr>
              <th>Judul</th>
              <td><input placeholder="Judul" id="Username" type="text" class="validate" name="judul" style="color: black;width: 100%"></td>
            </tr>
            <tr>
              <th>Gambar</th>
              <td><input type="file" id="inputgambar" name="gambarberita" class="validate"/ ></td>
            </tr>
            </table>
            <div style="text-align:center">
            <table border="1" style="width:100%">
            <tr>
              <th>Konten</th>
            </tr>
            <tr>

              <td><textarea id="textarea1" rows="20%" cols="100%" class="materialize-textarea" name="konten" type="text" class="validate" ></textarea></td>
            </tr>
          </table>
            <diV>
          <div style="text-align:center">
                <input type="submit" style="color: black;width: 100px;" name="Submit" value="Buat Berita">
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
