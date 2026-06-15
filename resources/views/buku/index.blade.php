@extends('template')

@section('title', 'Data Perpustakaan')
<!-- isi bagian konten-->
@section('konten')

    <center>
        <br />
        <h2>Daftar Buku</h2>
        <br />

        <br />
        <table class="table table-striped table-hover">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun</th>
                <th>Kategori</th>
                <th>Ketersediaan</th>
                <th>Pinjam</th>
            </tr>
            @foreach ($buku as $b)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $b->judul}}</td>
                    <td>{{ $b->penulis}}</td>
                    <td>{{ $b->tahun}}</td>
                    <td>{{ ($tahunSekarang - $b->tahun) <= 5 ? 'Baru' : 'Lama' }}</td>
                    <td>{{ $b->sedang_dipinjam ? 'Tidak Tersedia' : 'Tersedia' }}</td>
                    <td>
                        @if (!$b->sedang_dipinjam)
                            <form action="/perpustakaanpinjam/{{ $b->id }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">Pinjam</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
    </center>
@endsection
