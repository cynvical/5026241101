<!-- Menghubungkan dengan view template master -->
@extends('template')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'Data Penggaris')

@section('konten')
    <center>

        <br />
        <br />

        <p>Cari Data Penggaris :</p>
        <form action="/searchpenggaris" method="GET">
            <input type="text" name="cari" placeholder="Cari Penggaris .." value="{{ request('cari') }}">
            <input type="submit" value="CARI" class="btn btn-secondary">
        </form>
        <br />


        <table class="table table-striped table-hover">
            <tr>
                <th>Kode</th>
                <th>Merk</th>
                <th>Stock</th>
                <th>Tersedia</th>
                <th>Opsi</th>

            </tr>
            @foreach ($penggaris as $p)
                <tr>
                    <td>{{ $p->kodepenggaris }}</td>
                    <td>{{ $p->merkpenggaris }}</td>
                    <td>{{ $p->stockpenggaris }}</td>
                    <td>{{ $p->tersedia }}</td>
                    <td>
                        <a href="/editpenggaris{{ $p->kodepenggaris }}" class="btn btn-warning">Edit</a>

                        <a href="/deletepenggaris{{ $p->kodepenggaris }}"class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="mt-4">
            {{ $penggaris->links() }}
        </div>
        <a href="/addpenggaris"class="btn btn-primary">Tambah</a>
    </center>
@endsection
