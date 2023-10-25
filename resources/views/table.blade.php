@extends('layouts.app')

@section('content')
<body>
  <style>
    body{
      background-color: gray;
    }
  </style>

<div class = "container">
  <br>
  <h2>{{auth()->user()->username}}</h2>
<table class="table table-dark table-striped">
  
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Pengaduan</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Foto</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($pengaduan as $pengaduan)
    <tr>
      <td>{{$pengaduan->id_pengaduan}}</td>
      <td>{{$pengaduan->isi_laporan}}</td>
      <td>{{$pengaduan->tgl_pengaduan}}</td>
      <td><img src='{{asset("storage/image/".$pengaduan->foto)}}'width="100px"/></td>
      <td>
        <a href="hapus_pengaduan/{{$pengaduan->id_pengaduan}}"><button type="button" class="btn btn-outline-danger">Hapus</button></a> 
        <a href="update_pengaduan/{{$pengaduan->id_pengaduan}}"><button type="button" class="btn btn-outline-success">Update</button></a> 
        <a href="detail_pengaduan/{{$pengaduan->id_pengaduan}}"><button type="button" class="btn btn-outline-warning">Detail</button></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>
@endsection