<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;

use App\models\Pengaduan;
class PetugasController extends Controller
{

        function table(){
            $petugas = DB::table('petugas')-> get();
          return view('table',['petugas'=> $petugas]);
        }
    
        function proses_tambah_petugas(Request $request){
    
            $request->validate([
                'isi_laporan' => 'required|min:2'
            ]);
        }
        
           function proses_registrasi_petugas(Request $request){
            $nama_petugas = $request->nama_petugas;
            $username = $request->username;
            $password = $request->password;
            $telp = $request->telp;
            $level = $request->level;
    
            DB::table('petugas')->insert([
                'nama_petugas' => $nama_petugas,
                'username' => $username,
                'password' => hash::make($password),
                'telp' => $telp,
                'level' => $level, 
            ]);
            return redirect('/loginpetugas ');
        }
         function home(){
            $pengaduan = pengaduan:: All();

            return view('halaman_petugas',['pengaduan' => $pengaduan]);
        }
        function tablep(){

            $pengaduan = Pengaduan::all();
    
            return view('home_petugas',['pengaduan'=> $pengaduan]);
        }
        function proses_tanggapan(Request $request,$id){

    
            $status = $request->status;
                
            DB::table('pengaduan')->where('id_pengaduan',$id) -> update([
                
                'status' => $status,
            ]);
            return redirect('home_petugas');
        }
        function tanggapan($id){
            $pengaduan = DB::table('pengaduan')->where('id_pengaduan','=',$id)->first();
                
            return view('/tanggapan',['pengaduan'=> $pengaduan]);
        }
    
    }
   

