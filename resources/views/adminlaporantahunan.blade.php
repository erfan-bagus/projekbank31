@section('title')
Admin
@endsection
@extends('adminpagetemplate')
@section('content')





<br>
<div class="container">
    <div class="col-sm-1"></div>
    <div class="col-sm-10" style="height:700px">
      <h3 style="color: black;padding: 20px 20px 20px 20px">Laporan Tahunan</h3><br>
      <a href="adminlaporantahunanupload">
        <button class="btn btn-warning" style="width : 100%; margin : 10px 10px 10px 10px"><b>Tambah Laporan Tahunan</b></button>
      </a>

      <table class="table table-light" style=" margin : 10px 10px 10px 10px">
          <thead>
            <tr>

              <th>Caption</th>
              <th>Download</th>
              <th>Aksi</th>
          </thead>
          <tbody>
            @foreach ($file as $files)
            <tr>
              <td>{{$files->nama}}</td>
              <td><a href="downloadfile/{{$files->id}}">Download</a></td>
              <td><a href="hapuslaporantahunan/{{$files->id}}">Hapus</a></td>
            </tr>
              @endforeach
          </tbody>
        </table>

    </div>
    <div class="col-sm-1"></div>
</div>

<div style="text-align:center">
      {{ $file->links() }}
</div>

<div>


@endsection
