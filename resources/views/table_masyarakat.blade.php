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
<table class="table table-dark table-striped">
  
  <thead>
    <tr>
      <th scope="col">Nik</th>
      <th scope="col">Nama</th>
      <th scope="col">Username</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($masyarakat as $masyarakat)
    <tr>
      <td>{{$masyarakat->nik}}</td>
      <td>{{$masyarakat->nama}}</td>
      <td>{{$masyarakat->username}}</td>
    @endforeach
  </tbody>
</table>
</body>
</html>
@endsection