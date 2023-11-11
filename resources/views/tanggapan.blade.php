<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TANGGAPAN</title>
</head>
<body>
<link rel="stylesheet" href={{asset("bs/css/bootstrap.min.css")}}>
<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Memberi Tanggapan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
         <div class= container>
          <a class="nav-link active" aria-current="page" a href="{{url('home_petugas')}}">Bek</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</nav>
<style>
  body{
    
    background-color: grey;
  }
</style>
<div class="container" style="margin-top:40px;">
<div class="mb-3">
<form action={{url("/tanggapan/$pengaduan->id_pengaduan")}} method="POST" enctype="multipart/form-data">
      @method('POST')
      @csrf
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Menanggapi</label>
  <select name="status" class="form-select" aria-label="Default select example">
    <option selected>{{$pengaduan->status}}</option>
    <option value="0">0</option>
     <option value="proses">proses</option>
    <option value="selesai">selesai</option>
</select>
</div>
<button type="submit" class="btn btn-dark" style="padding:6px 40px;">Kirim</button>
</div>
</body>
</html>