<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLE</title>
</head>
<body>

<link rel="stylesheet" href="bs/css/bootstrap.min.css">
<form action="tanggapan"method="POST" enctype="multipart/form-data">
      @method('POST')
      @csrf

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Petugas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Memberi Tanggapan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('halaman_petugas')}}">Bek</a>
        </li>

      
    </div>
  </div>
</nav>
    <div class = "container">
  <br>
 
<table class="table table-dark table-striped">
  
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Pengaduan</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Foto</th>
      <th scope="col">Status</th>

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
      <td>{{$pengaduan->status}}</td>

      <td>
        <a href="tanggapan/{{$pengaduan->id_pengaduan}}"><button type="button" class="btn btn-outline-danger">Tanggapan</button></a> 
       
    
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>
</body>
</html>