<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="bs/css/bootstrap.min.css">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOME</title>
  <link rel="stylesheet" href="css/home.css">
  
</head>
<body>
  <style>
    h1{
      text-align:center;
    }
  
    
    
  </style>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PENGADUAN WAJIB NGADU</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('about')}}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('petugas_login')}}">Login Petugas</a>
        </li>
        
    </div>
  </div>
</nav>
<h1>{{$TextJudul}}</h1>
</body>
</html>