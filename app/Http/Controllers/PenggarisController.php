<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenggarisController extends Controller
{
    public function indexpenggaris()
    {
        // Ganti get() menjadi paginate(10) untuk membagi data per halaman
        $penggaris = DB::table('penggaris')->paginate(10);

        // mengirim data penggaris ke view index
        return view('indexpenggaris',['penggaris' => $penggaris]);

    }

	// method untuk menampilkan view form tambah penggaris
	public function addpenggaris()
	{

		// memanggil view tambah
		return view('addpenggaris');

	}

	// method untuk insert data ke table penggaris
	public function storepenggaris(Request $request)
	{
		// insert data ke table penggaris
		DB::table('penggaris')->insert([
			'kodepenggaris' => $request->kode,
			'merkpenggaris' => $request->merk,
			'stockpenggaris' => $request->stock,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman penggaris
		return redirect('/PR1');

	}

	// method untuk edit data penggaris
	public function editpenggaris($id)
	{
		// mengambil data penggaris berdasarkan id yang dipilih
		$penggaris = DB::table('penggaris')->where('kodepenggaris',$id)->get();
		// passing data penggaris yang didapat ke view edit.blade.php
		return view('editpenggaris',['penggaris' => $penggaris]);

	}

	// update data penggaris
	public function updatepenggaris(Request $request)
	{
		// update data penggaris
		DB::table('penggaris')->where('kodepenggaris',$request->id)->update([
			'kodepenggaris' => $request->kode,
			'merkpenggaris' => $request->merk,
			'stockpenggaris' => $request->stock,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman penggaris
		return redirect('/PR1');
	}

	// method untuk hapus data penggaris
	public function deletepenggaris($id)
	{
		// menghapus data penggaris berdasarkan id yang dipilih
		DB::table('penggaris')->where('kodepenggaris',$id)->delete();

		// alihkan halaman ke halaman penggaris
		return redirect('/PR1');
	}

    public function searchpenggaris(Request $request)
{
    $cari = $request->cari;

    $penggaris = DB::table('penggaris')
    ->where('merkpenggaris', 'like', "%" . $cari . "%")
    ->paginate(10);

    // mengirim data penggaris ke view index
    return view('indexpenggaris', ['penggaris' => $penggaris]);
}

}
