@section('title')
Admin
@endsection
@extends('layouts.adminpagetemplate')
@section('content')





<br>
<div class="container">
    <div class="col-sm-1"></div>
    <div class="col-sm-10" style="height:700px">
      <h3 style="color: black;padding: 20px 20px 20px 20px">Pengumuman</h3><br>
      <a href="adminpengumumanbuat">
        <button class="btn btn-warning" style="width : 100%; margin : 10px 10px 10px 10px"><b>Tambah Pengumuman</b></button>
      </a>

      <table class="table table-light" style=" margin : 10px 10px 10px 10px">
          <thead>
            <tr>

              <th>Judul</th>
              <th>Kategori</th>

              <th>Aksi</th>
          </thead>
          <tbody>
            @foreach ($file as $files)
            <tr>
              <td>{{$files->judul}}</td>
              <td>{{$files->kategori}}</td>

              <td><a href="editartikel/{{$files->id}}">Edit</a>|<a href="hapuspengumuman/{{$files->id}}">Hapus</a></td>
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
