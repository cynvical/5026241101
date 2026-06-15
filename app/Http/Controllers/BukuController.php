<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index()
    {
        // mengambil data dari table buku
        $buku = DB::table('buku')->get(); // jika tidak pakai paginate
        $tahunSekarang = date('Y');
        // $belanja = DB::table('pegawai')->paginate(10);

        // Mengirim data buku dan tahunSekarang ke view
        return view('perpustakaan/index', [
            'buku' => $buku,
            'tahunSekarang' => $tahunSekarang
        ]);
        // return view('perpustakaan/index',['buku' => $buku]); //
    }

    // public function store(Request $request)
    // {
    //     // insert data ke table keranjang_belanja
    //     DB::table('buku')->insert([
    //         'judul' => $request->judul,
    //         'penulis' => $request->penulis,
    //         'tahun' => $request->tahun
    //     ]);
    //     // alihkan halaman ke halaman perpustakaan
    //     return redirect('/perpustakaan');
    // }

    // Tambahkan function ini di bawah function index() Anda
    public function pinjam($id)
    {
        // Mengubah kolom sedang_dipinjam menjadi true berdasarkan id buku
        DB::table('buku')
            ->where('id', $id)
            ->update(['sedang_dipinjam' => true]);

        // Kembali ke halaman sebelumnya agar perubahan langsung terlihat
        return redirect('/perpustakaan');
    }

}
