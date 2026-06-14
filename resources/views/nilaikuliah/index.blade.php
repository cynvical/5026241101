@extends('template')
@section('title', 'Data Nilai Kuliah')
@section('konten')

    <h2>Data Nilai</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('nilaikuliah.create') }}">Tambah Nilai</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
            <th>Opsi</th>
        </tr>

        @forelse($nilaikuliah as $row)
            <tr>
                <td>{{ $row->ID }}</td>
                <td>{{ $row->NRP }}</td>
                <td>{{ $row->NilaiAngka }}</td>
                <td>{{ $row->SKS }}</td>
                <td>
                    @if ($row->NilaiAngka <= 40)
                        D
                    @elseif ($row->NilaiAngka <= 60)
                        C
                    @elseif ($row->NilaiAngka <= 80)
                        B
                    @else
                        A
                    @endif
                </td>

                <td>
                    {{ $row->NilaiAngka * $row->SKS }}
                </td>
                <td>
                    <a href="{{ route('nilaikuliah.edit', $row->ID) }}" class="btn btn-warning">Edit</a>

                    <form action="{{ route('nilaikuliah.destroy', $row->ID) }}" method="POST" style="display:inline;"
                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>

                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data nilai kuliah.</td>
            </tr>
        @endforelse
    </table>
@endsection
