@extends('layout.main')
@section('konten')
        <form action="{{ route('mapel.update', $mapel->id) }}" method="POST" class="mt-5 col-md-6 mx-auto ">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_mapel" class="form-label">Nama Mapel</label>
                <input type="text" name="nama_mapel" id="nama_mapel" class="form-control" value="{{ old('nama_mapel', $mapel->nama_mapel) }}">
            </div>
            <button class="btn btn-success ">Update Data</button>
        </form>
@endsection
