<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NPController extends Controller
{
    public function index()
    {
        $nilai_peserta = DB::table('nilai_peserta')
            ->orderBy('ID')
            ->get();

        return view('nilai_peserta.index', compact('nilai_peserta'));
    }

    public function create()
    {
        return view('nilai_peserta.create');
    }

    public function edit($id)
    {
        $nilai_peserta = DB::table('nilai_peserta')
            ->where('ID', $id)
            ->first();

        return view('nilai_peserta.edit', compact('nilai_peserta'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nopeserta' => 'required|max:5',
            'nilaiteori' => 'required|integer',
            'nilaipraktek' => 'required|integer'
        ]);

        DB::table('nilai_peserta')->insert([
            'nopeserta' => $request->nopeserta,
            'nilaiteori' => $request->nilaiteori,
            'nilaipraktek' => $request->nilaipraktek
        ]);

        return redirect()->route('nilai_peserta.index');
    }


    public function update(Request $request, $id)
    {
       $request->validate([
            'nopeserta' => 'required|max:5',
            'nilaiteori' => 'required|integer',
            'nilaipraktek' => 'required|integer'
        ]);

         DB::table('nilai_peserta')->insert([
            'nopeserta' => $request->nopeserta,
            'nilaiteori' => $request->nilaiteori,
            'nilaipraktek' => $request->nilaipraktek
        ]);


        return redirect()->route('nilai_peserta.index');
    }

    public function destroy($id)
    {
        DB::table('nilai_peserta')
            ->where('ID', $id)
            ->delete();

        return redirect()->route('nilai_peserta.index');
    }
}
