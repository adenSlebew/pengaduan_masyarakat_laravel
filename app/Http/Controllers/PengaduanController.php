<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\Pengaduan;
class PengaduanController extends Controller
{
    function index(){
        // $pengaduan = DB::table('pengaduan')-> get();

        $judul = "Selamat Datang Table";

        $pengaduan = Pengaduan::all();

        return view('table',['judul'=>
        $judul,'pengaduan'=> $pengaduan]);
    }

    function tampil_laporan(){
        $judul_laporan = "Silahkan Melapor";

        return view('isi_laporan',['Textlaporan' => $judul_laporan]);
    }
    function proses_tambah_pengaduan(Request $request){

        $nama_foto = $request->foto->getClientOriginalName();

        $request->validate([
            'isi_laporan' => 'required|min:2'
        ]);

        $request->foto->storeAs('public/image',$nama_foto);

        $isi_laporan = $request->isi_laporan;
    

        DB::table('pengaduan')->insert([
            'tgl_pengaduan' =>date('Y-m-d'),
            'nik' => '112',
            'isi_laporan' => $isi_laporan,
            'foto' => $request->foto->getClientOriginalName(),
            'status' => '0',
        ]);
        return redirect('/table ');
    }

    function home(){

        $judul = "Selamat Datang Di Welcome";
         
        return view('home',['TextJudul' => $judul]);
    }
    function hapus($id){
        DB::table('pengaduan')->where('id_pengaduan','=',$id)->delete();

        return redirect()->back();
    }
    function detail($id){
        $pengaduan = DB::table('pengaduan')->where('id_pengaduan','=',$id)->get();

        return view('detail',['pengaduan'=> $pengaduan]);
    }

    function proses_update(Request $request,$id){

        $request->validate([
            'isi_laporan' => 'required|min:2'
        ]);

        $isi_laporan = $request->isi_laporan;
            
        DB::table('pengaduan')->where('id_pengaduan',$id) -> update([
            
            'isi_laporan' => $isi_laporan,
        ]);
        return redirect('/table ');
    }
    function update($id){
        $pengaduan = DB::table('pengaduan')->where('id_pengaduan','=',$id)->first();
            
        return view('update',['pengaduan'=> $pengaduan]);
    }
}