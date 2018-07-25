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
          <h3>Upload File</h3>
      </div>

      <form action="aksitambahfile" method="post" enctype="multipart/form-data">
          <!--username start-->

        <!--username end-->
        <div style="text-align:left">
          <input placeholder="Caption file" id="Username" type="text" class="validate" name="namafile" style="color: black;">
        </div>
      <!--password start-->
            <div class="input-field col s12" >
                <div class="row">

                  <div class="input-field col s6" >
                    <input type="file" id="inputgambar" name="filepdf" class="validate"/ >
                  </div>
                </div>
              </div>
      <!--password start-->
          <!--password start-->

        <!--password end-->
        <!--username start-->

      <!--username end-->
      <div style="text-align:left">
          <input type="submit" name="Submit" value="Simpan">
      </div>
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="PUT">
        </form>
      </div>
    </div>




      </div>
      </div>
      <div class="col-sm-1"></div>
    </div>
  </div>
<br>





@endsection
