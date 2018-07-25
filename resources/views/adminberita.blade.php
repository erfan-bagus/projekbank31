@section('title')
Admin
@endsection
@extends('adminpagetemplate')
@section('content')





<br>
<div class="container">
    <div class="col-sm-1"></div>
    <div class="col-sm-10" style="height:700px">
      <h3 style="color: black;padding: 20px 20px 20px 20px">Berita</h3><br>
      <a href="adminberitabuat">
        <button class="btn btn-warning" style="width : 100%; margin : 10px 10px 10px 10px"><b>Tambah Berita</b></button>
      </a>

      <table class="table table-light" style=" margin : 10px 10px 10px 10px">
          <thead>
            <tr>

              <th>Judul</th>
              <th>Kategori</th>
              <th>Gambar</th>
              <th>Aksi</th>
          </thead>
          <tbody>
            @foreach ($file as $files)
            <tr>
              <td>{{$files->judul}}</td>
              <td>{{$files->kategori}}</td>
              <td><img src="{{ asset('gambarberita')}}/{{$files->gambarberita}}"  style="width:200px;height:100px"></td>
              <td><a href="editartikel/{{$files->id}}">Edit</a>|<a href="hapusberita/{{$files->id}}">Hapus</a></td>
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
