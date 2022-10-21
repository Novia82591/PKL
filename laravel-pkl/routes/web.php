<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PembimbingController;
use App\Http\Controllers\UploadfileController;
use App\Http\Controllers\ValidasiController;
use App\Models\Pembimbing;
use App\Models\Validasi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



#Mahasiswa
Route::get('/home-mahasiswa',[MahasiswaController::class,'home']);
Route::get('/pendaftaran',[MahasiswaController::class,'pendaftaran']);
Route::get('/printjadwal',[MahasiswaController::class,'print']);
Route::get('/jadwal-seminar-mahasiswa',[MahasiswaController::class,'jadwalseminar']);
Route::get('/pembimbing-penguji',[MahasiswaController::class,'pembimbing']);
Route::get('/ajukan-pendaftaran',[MahasiswaController::class,'ajukanpendaftaran']);
Route::post('/pendaftaran/simpan-pendaftaran',[MahasiswaController::class,'store2']);
Route::get('/pendaftaran/{id}/edit',[MahasiswaController::class,'edit2']);
Route::get('/data-mahasiswa',[MahasiswaController::class,'index']);
Route::get('/tambah-data-mahasiswa',[MahasiswaController::class,'create']);
Route::post('/simpan-data-mahasiswa',[MahasiswaController::class,'store']);
Route::get('/data-mahasiswa/{id}/edit',[MahasiswaController::class,'edit']);
Route::put('/data-mahasiswa/{id}',[MahasiswaController::class,'update']);
Route::delete('/data-mahasiswa/{id}',[MahasiswaController::class,'destroy']);

#Validasi
Route::get('/disetujui',[ValidasiController::class,'index']);
Route::get('/disetujui/{id}/setuju',[ValidasiController::class,'setuju']);
Route::get('/disetujui/{id}/revisi',[ValidasiController::class,'revisi']);
Route::get('/disetujui/{id}/tolak',[ValidasiController::class,'tolak']);

Route::get('/disetujui/{id}/edit', [ValidasiController::class,'edit']);
Route::post('/simpan-edit', [ValidasiController::class,'storeedit']);
//Admin
Route::get('/home', [AdminController::class,'home']);
Route::get('/data-dosen', [AdminController::class,'datadosen']);
Route::get('/tambah-data-dosen', [AdminController::class,'tambahdosen']);
Route::post('/simpan-data-dosen', [AdminController::class,'storedosen']);
Route::get('/data-dosen/{id}/edit', [AdminController::class,'editdosen']);
Route::put('/data-dosen/{id}', [AdminController::class,'updatedosen']);
Route::delete('/data-dosen/{id}', [AdminController::class,'deletedosen']);
Route::get('/koordinator', [AdminController::class,'koor']);


// Route::get('/pendaftaran-ta', [AdminController::class,'index']);

#Dosen
Route::get('/home-dosen', [DosenController::class,'homedosen']);
Route::get('/lihat-jadwal', [DosenController::class,'lihatjadwal']);
Route::get('/mahasiswa-ta', [DosenController::class,'mahasiswa']);

#Login
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
Route::get('/register',[LoginController::class,'register'])->name('register');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');



#Jadwal

Route::get('/jadwal-seminar', [JadwalController::class,'index']);
Route::get('/tambah-jadwal-seminar', [JadwalController::class,'create']);
Route::post('/simpan-jadwal-seminar', [JadwalController::class,'store']);
Route::get('/jadwal-seminar/{id}/edit', [JadwalController::class,'edit']);
Route::put('/jadwal-seminar/{id}', [JadwalController::class,'update']);
Route::delete('/jadwal-seminar/{id}', [JadwalController::class,'destroy']);

// Upload file

Route::get('/uploadfile',[UploadfileController::class,'index']);
Route::post('/uploadfile',[UploadfileController::class,'store']);
Route::get('/pendaftaran-ta', [UploadfileController::class,'index']);
Route::get('/createfile', [UploadfileController::class,'create']);
Route::post('/simpan-file', [UploadfileController::class,'store']);

// Pembimbing
Route::get('/pembimbing', [PembimbingController::class,'index']);
Route::get('/tambah-pembimbing', [PembimbingController::class,'create']);
Route::post('/simpan-pembimbing', [PembimbingController::class,'store']);
Route::get('/pembimbing/{id}/edit', [PembimbingController::class,'edit']);
Route::put('/pembimbing/{id}', [PembimbingController::class,'update']);
Route::delete('/pembimbing/{id}', [PembimbingController::class,'destroy']);

Route::get('/edit', [PembimbingController::class,'editKeterangan']);
Route::get('/print-dospem', [PembimbingController::class,'dospem']);