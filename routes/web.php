<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginPetugasController;

Route::get ('/update_pengaduan/{id}', [PengaduanController::class,'update']);
Route::post('/update_pengaduan/{id}', [PengaduanController::class,'proses_update']);

Route::post('/tanggapan/{id}', [PetugasController::class,'proses_tanggapan']);
Route::get ('/tanggapan/{id}', [PetugasController::class,'tanggapan']);

Route::post('register_petugas', [PetugasController::class,'proses_registrasi_petugas']);
Route::post('/register', [MasyarakatController::class,'proses_register']);
Route::get('/register', [MasyarakatController::class,'buat_akun']);


Route::get('/table_masyarakat', [MasyarakatController::class,'tablemas']);
Route::post('/table_masyarakat', [MasyarakatController::class,'proses_tambah_pengaduan']);


Route::get('home', [PengaduanController::class,'home']);


Route::post('/loginpetugas', [LoginPetugasController::class,'loginpetugas']);
Route::post('/login', [LoginController::class,'login'])->name("login");
Route::get('/login', [LoginController::class,'index']);
Route::get('login', function () {
    return view('login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('isi_laporan', [PengaduanController::class,'tampil_laporan']);
    Route::post('isi_laporan', [PengaduanController::class,'proses_tambah_pengaduan']);
    Route::get('/table', [PengaduanController::class,'index']);
    Route::get('/hapus_pengaduan/{id}', [PengaduanController::class,'hapus']);
    Route::get ('/detail_pengaduan/{id}', [PengaduanController::class,'detail']);
    Route::get('/logout', [LoginController::class,'logout']);
    
  });
Route::middleware(['cekPetugas'])->group(function () {
    Route::get('/loginpetugas', [LoginPetugasController::class,'index']);
    Route::get('/halaman_petugas', [PetugasController::class,'home']);
    Route::get('/logoutpetugas', [LoginPetugasController::class,'logoutpetugas']);
    Route::get('/home_petugas', [PetugasController::class,'tablep']);
  });


Route::get('/about', function () {
    return view('about');
});

Route::get('/petugas_login', function () {
    return view('loginpetugas');
});

Route::get('/register_petugas', function () {
    return view('register_petugas');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('app', function () {
    return view('layouts.app');
});
