@extends('layout.main')
@section('konten')
    <form action="{{ route('guru.store') }}" method="POST" enctype="multipart/form-data" class="mt-5 col-md-6 mx-auto">
        @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" id="nama" class="form-control" name="nama">
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No HP</label>
                <input type="text" id="no_hp" class="form-control" name="no_hp">
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" id="foto" class="form-control" name="foto">
            </div>
            <button type="submit" class="btn btn-outline-success">Tambah Data</button>
    </form>
@endsection
