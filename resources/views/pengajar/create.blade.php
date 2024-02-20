@extends('layout.main')
@section('konten')
    <form action="{{ route('pengajar.store') }}" class="mt-5 col-md-6 mx-auto" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_guru" class="form-label">Nama Guru</label>
            <select name="nama_guru" id="nama_guru" class="form-control">
                <option value="">--Pilih Nama Guru--</option>
                @foreach ($guru as $g)
                    <option value="{{ $g->id }}">{{ $g->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="nama_mapel" class="form-label">Nama Mapel</label>
            <select name="nama_mapel" id="nama_mapel" class="form-control">
                <option value="">--Pilih Nama Mapel--</option>
                @foreach ($mapel as $m)
                    <option value="{{ $m->id }}">{{ $m->nama_mapel }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <select name="kelas" id="kelas" class="form-control">
                <option value="">--Pilih Kelas--</option>
                    <option value="X-PPLG">X-PPLG</option>
                    <option value="XI-PPLG">XI-PPLG</option>
                    <option value="XII-PPLG">XII-PPLG</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="jam_pelajaran" class="form-label">Jam Pelajaran</label>
            <select name="jam_pelajaran" id="jam_pelajaran" class="form-control">
                <option value="">--Pilih Jam Pelajaran--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Tambah Data</button>
    </form>
@endsection
