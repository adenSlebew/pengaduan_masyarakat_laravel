<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class LoginPetugasController extends Controller
{
    public function index(){
        return view('loginpetugas');
    }
    public function loginpetugas(Request $request){
        $data = $request->only('username','password');
        if(Auth::guard("petugas")->attempt($data)){
            return redirect('/halaman_petugas ');
        }else{
            echo"gagal";
        }
    }
    function logout(){
        Auth::guard("petugas")->logout();

        return redirect('petugas_login');
    }
  
}
