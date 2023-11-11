<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN</title>
</head>

<body>
<link rel="stylesheet" href="bs/css/bootstrap.min.css">
<style>
  h1{
    text-align:center;
  }
</style><nav class="navbar navbar-expand-lg bg-body-tertiary">
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
          <a class="nav-link active" aria-current="page" href="{{url('/home_petugas')}}">Table</a>
        </li>
      <form class="d-flex" role="search">
        <button class="btn btn-outline-success" type="submit"><a class="nav-link active" aria-current="page" href="{{url('/logout')}}">Logout</a></button>
      </form>
    </div>
  </div>
</nav>

<h1>WALAWE</h1>

</body>
</html>
