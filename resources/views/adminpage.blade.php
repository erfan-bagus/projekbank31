@section('title')
Admin
@endsection
@extends('adminpagetemplate')
@section('content')


<div style="text-align:center">


<br>
<div class="container">
    <div class="col-sm-1"></div>
    <div class="col-sm-10" style="height:700px">
      <h3 style="color: black;padding: 20px 20px 20px 20px">Keterangan File Dan Konten</h3><br>


      <table class="table table-light">
          <thead>
            <tr>

              <th>File Laporan tahunan</th>
              <th>File Laporan Keuangan</th>
              <th>File GCG </th>
              <th>Artikel Berita</th>
              <th>Artukel Pengumuman</th>
              <th>Lamaran</th>
            </tr>
          </thead>
          <tbody>
            <tr>

              <td>{{$tahunan}}</td>
              <td>{{$keuangan}}</td>
              <td>{{$cgc}}</td>
              <td>{{$berita}}</td>
              <td>{{$pengumuman}}</td>
              <td>{{$lamaran}}</td>
            </tr>
          </tbody>
        </table>
        <br>
        <h3 style="color: black;padding: 20px 20px 20px 20px">Karir</h3><br>
        <form action="buatlaporanlamaranaksi" method="post" enctype="multipart/form-data">


              <table border="1" style="width:100%">
              <tr>
                <th>File Halaman Karir</th>
                <td style="width:80%">Upload</td>
              </tr>
              <tr>
                <th>File</th>
                <td><input type="file" id="inputgambar" name="filepdf" class="validate"/ ></td>
              </tr>
              </table>

            <div style="text-align:center">
                  <input type="submit" style="color: black;width: 300px;" name="Submit" value="Upload Lamaran">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="PUT">
      </form>
        <table class="table table-light" style=" margin : 10px 10px 10px 10px">
            <thead>
              <tr>

                <th>File Karir</th>
                <th>Download</th>
                <th>Aksi</th>
            </thead>
            <tbody>
              @foreach ($file as $files)
              <tr>
                <td>{{$files->namalokasi}}</td>
                <td><a href="downloadfile/{{$files->id}}">Download</a></td>
                <td><a href="hapuslamaran/{{$files->id}}">Hapus</a></td>
              </tr>
                @endforeach
            </tbody>
          </table>

    </div>
    <div class="col-sm-1"></div>
</div>

</div>
<div style="text-align:center">
      {{ $file->links() }}
</div>


@endsection
