@extends('template')

@section('title', 'Data Penggaris')

@section('konten')

    <h3>Edit Penggaris</h3>

    @foreach($penggaris as $p)

    <div class="card mt-4">
        <div class="card-header">
            Form Edit Data Penggaris
        </div>

        <div class="card-body">
            <form action="/updatepenggaris" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="id" value="{{ $p->kodepenggaris }}">

                <div class="row mb-3">
                    <label for="kode" class="col-sm-2 col-form-label">Kode</label>
                    <div class="col-sm-10">
                        <input
                            type="number"
                            name="kode"
                            id="kode"
                            class="form-control"
                            required
                            value="{{ $p->kodepenggaris }}"
                            readonly
                        >
                        </div>
                </div>

                <div class="row mb-3">
                    <label for="merk" class="col-sm-2 col-form-label">Merk Penggaris</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            name="merk"
                            id="merk"
                            class="form-control"
                            maxlength="30"
                            required
                            value="{{ $p->merkpenggaris }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stock" class="col-sm-2 col-form-label">Stock</label>
                    <div class="col-sm-10">
                        <input
                            type="number"
                            name="stock"
                            id="stock"
                            class="form-control"
                            required
                            value="{{ $p->stockpenggaris }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                        <select name="tersedia" id="tersedia" class="form-control" required>
                            <option value="Y" {{ $p->tersedia == 'Y' ? 'selected' : '' }}>Y (Ya)</option>
                            <option value="N" {{ $p->tersedia == 'N' ? 'selected' : '' }}>N (Tidak)</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                        <a href="/PR1" class="btn btn-secondary ms-2">Kembali</a>
                    </div>
                </div>

            </form>
        </div>
    </div>

    @endforeach

@endsection
