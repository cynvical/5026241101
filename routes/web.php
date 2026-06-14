<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\PenggarisController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\NilaiController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1>di tutorial laravel <i>www.malasngoding.com</i>";
});

// Route::get('blog', function () {
// 	return view('blog');
// });



Route::get('dosen', [DosenController::class, 'index']);

Route::get('biodata', function () {
	return view('biodata');
});

Route::get('p1', function () {
	return view('tugas routing.intro');
});

Route::get('p2', function () {
	return view('news');
});


Route::get('p3', function () {
	return view('responsive');
});

Route::get('p4', function () {
	return view('5026241101');
});

Route::get('p5', function () {
	return view('pertemuan5');
});

Route::get('/', function () {
	return view('welcome');
});

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);
Route::get('/pegawainama/{nama}', [PegawaiController::class, 'formulir']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'formulir']);

// crud
Route::get('/pegawai/',[PegawaiDBController::class, 'index']);
Route::get('/pegawaitambah',[PegawaiDBController::class, 'tambah']);
Route::post('/pegawaistore',[PegawaiDBController::class, 'store']);
Route::get('/pegawaiedit{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawaiupdate',[PegawaiDBController::class, 'update']);
Route::get('/pegawaihapus{id}',[PegawaiDBController::class, 'hapus']);
Route::get('/pegawaicari', [PegawaiDBController::class, 'cari']);

Route::get('/PR1',[PenggarisController::class, 'indexpenggaris']);
Route::get('/addpenggaris',[PenggarisController::class, 'addpenggaris']);
Route::post('/storepenggaris',[PenggarisController::class, 'storepenggaris']);
Route::get('/editpenggaris{id}',[PenggarisController::class, 'editpenggaris']);
Route::post('/updatepenggaris',[PenggarisController::class, 'updatepenggaris']);
Route::get('/deletepenggaris{id}',[PenggarisController::class, 'deletepenggaris']);
Route::get('/searchpenggaris', [PenggarisController::class, 'searchpenggaris']);


Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

Route::get('/nilaikuliah', [NilaiController::class, 'index'])->name('nilaikuliah.index');
Route::get('/nilaikuliah/create', [NilaiController::class, 'create'])->name('nilaikuliah.create');
Route::post('/nilaikuliah', [NilaiController::class, 'store'])->name('nilaikuliah.store');
Route::get('/nilaikuliah/{id}/edit', [NilaiController::class, 'edit'])->name('nilaikuliah.edit');
Route::put('/nilaikuliah/{id}', [NilaiController::class, 'update'])->name('nilaikuliah.update');
Route::delete('/nilaikuliah/{id}', [NilaiController::class, 'destroy'])->name('nilaikuliah.destroy');

Route::get('/keranjangbelanja', [KeranjangController::class, 'index'])->name('keranjangbelanja.index');
Route::get('/keranjangbelanja/create', [KeranjangController::class, 'create'])->name('keranjangbelanja.create');
Route::post('/keranjangbelanja', [KeranjangController::class, 'store'])->name('keranjangbelanja.store');
Route::get('/keranjangbelanja/{id}/edit', [KeranjangController::class, 'edit'])->name('keranjangbelanja.edit');
Route::put('/keranjangbelanja/{id}', [KeranjangController::class, 'update'])->name('keranjangbelanja.update');
Route::delete('/keranjangbelanja/{id}', [KeranjangController::class, 'destroy'])->name('keranjangbelanja.destroy');
