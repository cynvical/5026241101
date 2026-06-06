<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\PenggarisController;
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
	return view('intro');
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
