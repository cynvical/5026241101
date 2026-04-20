<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
    	$nama = "Fayza Vicka";
        $pelajaran = ["Pemrograman Web", "kalkulus"];
    	return view('biodata',['nama' => $nama, 'matkul' => $pelajaran]);
    }
}
