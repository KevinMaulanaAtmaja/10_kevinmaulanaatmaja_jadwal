@extends('layout.main')
@section('konten')
    <form action="{{ route('guru.update', $guru->id) }}" method="POST" enctype="multipart/form-data" class="mt-5 col-md-6 mx-auto">
        @csrf
        @method('PUT')
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" id="nama" class="form-control" name="nama" value="{{ old('nama', $guru->nama) }}">
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No HP</label>
                <input type="text" id="no_hp" class="form-control" name="no_hp" value="{{ old('no_hp', $guru->no_hp) }}">
            </div>
            <img src="{{ asset('storage/images/' . $guru->foto) }}" class="img-thumbnail img-fluid my-3 " width="80">
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" id="foto" class="form-control" name="foto" value="{{ old('foto', $guru->foto) }}">
            </div>
            <button type="submit" class="btn btn-outline-success">Ubah Data</button>
    </form>
@endsection
