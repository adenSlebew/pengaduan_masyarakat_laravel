<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;

class MasyarakatController extends Controller
{
    function tablemas(){
        $masyarakat = DB::table('masyarakat')-> get();
      return view('table_masyarakat',['masyarakat'=> $masyarakat]);
    }

    
     function login(){
        return view('login');
     }

     function buat_akun(){
       return view('/register'); 
    }
       function proses_register(Request $request){
        $nik = $request->nik;
        $nama = $request->nama;
        $username = $request->username;
        $password = $request->password;
        $telp = $request->telp;
       

        DB::table('masyarakat')->insert([
            'nik' => $nik,
            'nama' => $nama,
            'username' => $username,
            'password' => hash::make($password),
            'telp' => $telp,
        ]);
        return redirect('/login ');
    }

}


