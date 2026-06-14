@extends('template')
@section('title', 'Edit Nilai')
@section('konten')

    <h2>Edit Keranjang Belanja</h2>
    <form action="{{ route('keranjangbelanja.update', $keranjangbelanja->ID) }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label>Kode Barang</label><br>
            <input type="number" name="KodeBarang" value="{{ $keranjangbelanja->KodeBarang }}" required>
        </p>

        <p>
            <label>Jumlah</label><br>
            <input type="number" name="Jumlah" value="{{ $keranjangbelanja->Jumlah }}" required>
        </p>

        <p>
            <label>Harga</label><br>
            <input type="number" name="Harga" value="{{ $keranjangbelanja->Harga }}" required>
        </p>

        <button type="submit" class="btn btn-success">
            Update
        </button>

        <button type="submit" href="{{ route('keranjangbelanja.index') }}" class="btn btn-secondary">
            Kembali
        </button>

    </form>
@endsection
