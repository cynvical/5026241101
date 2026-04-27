<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\BlogController;
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
