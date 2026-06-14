@extends('template')
@section('title', 'Keranjang Belanja')
@section('konten')

    <h2>Isi Keranjang Belanja</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('keranjangbelanja.create') }}">Beli</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>

        @forelse($keranjangbelanja as $row)
            <tr>
                <td>{{ $row->ID }}</td>
                <td>{{ $row->KodeBarang }}</td>
                <td>{{ $row->Jumlah }}</td>
                <td>{{ number_format($row->Harga, 0, ',', '.') }}</td>
                <td>{{ number_format($row->Jumlah * $row->Harga, 0, ',', '.') }}</td>

                <td>
                    <a href="{{ route('keranjangbelanja.edit', $row->ID) }}" class="btn btn-warning">Edit</a>

                    <form action="{{ route('keranjangbelanja.destroy', $row->ID) }}" method="POST" style="display:inline;"
                        onsubmit="return confirm('Yakin batal beli barang ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Batal</button>

                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Keranjang belanja masih kosong..</td>
            </tr>
        @endforelse
    </table>
@endsection
