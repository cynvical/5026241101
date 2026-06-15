@extends('template')
@section('title', 'Kode Soal nilai_peserta')
@section('konten')

    <h2>Data Nilai Peserta</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('nilai_peserta.create') }}"class="btn btn-primary">Tambah Data</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>No Peserta</th>
            <th>Nilai Teori</th>
            <th>Nilai Praktek</th>
            <th>Rata-rata</th>
            <th>Status</th>
            <th>Opsi</th>
        </tr>

        @forelse($nilai_peserta as $row)
            <tr>
                <td>{{ $row->ID }}</td>
                <td>{{ $row->nopeserta}}</td>
                <td>{{ $row->nilaiteori }}</td>
                <td>{{ $row->nilaipraktek}}</td>
                <td>
                    {{ ($row->nilaiteori + $row->nilaipraktek) / 2 }}
                </td>
                <td style="background-color: <?php echo (($row->nilaiteori + $row->nilaipraktek) / 2  < 75) ? 'red' : 'green'; ?>;">
                    @if (($row->nilaiteori + $row->nilaipraktek) / 2  < 75)
                        <p style="color: white;">Gagal</p>
                    @else
                        <p style="color: white;">Lulus</p>
                    @endif
                </td>


                <td>
                    <form action="{{ route('nilai_peserta.destroy', $row->ID) }}" method="POST" style="display:inline;"
                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>

                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data nilai peserta.</td>
            </tr>
        @endforelse
    </table>
@endsection
