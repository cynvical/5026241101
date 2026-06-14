@extends('template')
@section('title', 'Data Nilai Kuliah')
@section('konten')

    <h2>Tambah Isi Keranjang</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('keranjangbelanja.store') }}" method="POST" onsubmit="return validasiForm()">
        @csrf

        <p>
            <label>Kode Barang</label><br>
            <input type="text" name="KodeBarang" id="KodeBarang" required>
        </p>

        <p>
            <label>Jumlah</label><br>
            <input type="number" name="Jumlah" id="Jumlah" required>
        </p>

        <p>
            <label>Harga</label><br>
            <input type="number" name="Harga" id="Harga" required>
        </p>

        <button type="submit">Simpan</button>
        <a href="{{ route('keranjangbelanja.index') }}">Kembali</a>
    </form>

@endsection
