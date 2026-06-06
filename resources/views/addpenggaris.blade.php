@extends('template')

@section('title', 'Data Penggaris')

@section('konten')
    <div class="card mt-4">
        <div class="card-header">
            Form Tambah Data Penggaris
        </div>

        <div class="card-body">
            <form action="/storepenggaris" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="kode" class="col-sm-2 col-form-label">Kode</label>
                    <div class="col-sm-10">
                        <input type="number" name="kode" id="kode" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="merk" class="col-sm-2 col-form-label">Merk Penggaris</label>
                    <div class="col-sm-10">
                        <input type="text" name="merk" id="merk" class="form-control" maxlength="30" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stock" class="col-sm-2 col-form-label">Stock</label>
                    <div class="col-sm-10">
                        <input type="number" name="stock" id="stock" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                        <select name="tersedia" id="tersedia" class="form-control" required>
                            <option value="">- Pilih Status -</option>
                            <option value="Y">Y (Ya)</option>
                            <option value="N">N (Tidak)</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                        <a href="/PR1" class="btn btn-info ms-2">Kembali</a>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
