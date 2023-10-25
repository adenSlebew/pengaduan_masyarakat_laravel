<!DOCTYPE HTML>
<html>
    <head>
        <title>Daftar</title>
        <link rel="stylesheet" href="css/style2.css">
    </head>
    <body>
        <div class="daftar">
          <h2>Registrasi</h2>

            <form method="POST" action="register_petugas"> 
              @method('POST')
              @csrf
                <input name="tujuan" type="hidden" value="Daftar" >
                <div class="Daftar">
               
                <label>Nama</label>
                <br>
                <input name="nama_petugas" type="text" required >
                <br>
                <label>Username</label>
                <br>
                <input name="username" type="text" required >
                <br>
                <label>Password</label>
                <br>
                <input name="password" type="password" required >
                <br>
                <label>Telp</label>
                <br>
                <input name="telp" type="text" required >
            
                <br>
                <label>Level</label>
                <select name="level">
                    <option value="admin">Admin</option>
                    <option value="petugas">Petugas</option>
                </select>
                <br>
              

                <button type="submit">Daftar</button>
                <a href="{{url('loginpetugas')}}"><button type="submit">Kembali </a> 
                </form>