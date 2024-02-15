@extends('layout.main')
@section('konten')
    <form action="{{ route('mapel.store') }}" method="POST" enctype="multipart/form-data" class="mt-5 col-md-6 mx-auto">
        @csrf
            <div class="mb-3">
                <label for="nama_mapel" class="form-label">Nama Mapel</label>
                <input type="text" id="nama_mapel" class="form-control" name="nama_mapel">
            </div>
            <button type="submit" class="btn btn-outline-success">Tambah Data</button>
    </form>
@endsection
