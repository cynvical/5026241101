@extends('template')
@section('title', 'Data Nilai Kuliah')
@section('konten')

    <h2>Tambah Nilai Kuliah</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('nilaikuliah.store') }}" method="POST" onsubmit="return validasiForm()">
        @csrf

        <p>
            <label>NRP</label><br>
            <input type="text" name="NRP" id="NRP" maxlength="6" required>
        </p>

        <p>
            <label>Nilai Angka</label><br>
            <input type="number" name="NilaiAngka" id="NilaiAngka" required>
        </p>

        <p>
            <label>SKS</label><br>
            <input type="number" name="SKS" id="SKS" required>
        </p>

        <button type="submit">Simpan</button>
        <a href="{{ route('nilaikuliah.index') }}">Kembali</a>
    </form>

@endsection
