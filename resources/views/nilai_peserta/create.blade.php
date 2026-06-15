@extends('template')
@section('title', 'Kode Soal nilai_peserta')
@section('konten')

    <h2>Tambah Nilai Peserta</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('nilai_peserta.store') }}" method="POST" onsubmit="return validasiForm()">
        @csrf

        <p>
            <label>No Peserta</label><br>
            <input type="text" name="nopeserta" id="No nopeserta" maxlength="5" required>
        </p>

        <p>
            <label>Nilai Teori</label><br>
            <input type="number" name="nilaiteori" id="nilaiteori" required>
        </p>

        <p>
            <label>Nilai Praktek</label><br>
            <input type="number" name="nilaipraktek" id="nilaipraktek" required>
        </p>

        <button type="submit">Simpan</button>
        <a href="{{ route('nilai_peserta.index') }}">Kembali</a>
    </form>

@endsection
