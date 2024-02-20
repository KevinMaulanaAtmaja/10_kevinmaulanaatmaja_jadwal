@extends('layout.main')
@section('konten')
    <form action="{{ route('pengajar.update', $pengajar->id) }}" class="mt-5 col-md-6 mx-auto" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_guru" class="form-label">Nama Guru</label>
            <select name="nama_guru" id="nama_guru" class="form-control">
                <option value="">--Pilih Nama Guru--</option>
                @foreach ($guru as $g)
                    <option value="{{ $g->id }}" {{ $g->id == $pengajar->id_guru ? 'selected' : '' }}>{{ $g->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="nama_mapel" class="form-label">Nama Mapel</label>
            <select name="nama_mapel" id="nama_mapel" class="form-control">
                <option value="">--Pilih Nama Mapel--</option>
                @foreach ($mapel as $m)
                    <option value="{{ $m->id }}" {{ $m->id == $pengajar->id_mapel ? 'selected' : '' }}>{{ $m->nama_mapel }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <select name="kelas" id="kelas" class="form-control">
                <option value="">--Pilih Kelas--</option>
                    <option value="X-PPLG" {{ $pengajar->kelas == 'X-PPLG' ? 'selected' : '' }}>X-PPLG</option>
                    <option value="XI-PPLG" {{ $pengajar->kelas == 'XI-PPLG' ? 'selected' : '' }}>XI-PPLG</option>
                    <option value="XII-PPLG" {{ $pengajar->kelas == 'XII-PPLG' ? 'selected' : '' }}>XII-PPLG</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="jam_pelajaran" class="form-label">Jam Pelajaran</label>
            <select name="jam_pelajaran" id="jam_pelajaran" class="form-control">
                <option value="">--Pilih Jam Pelajaran--</option>
                    <option value="1" {{ $pengajar->jam_pelajaran == '1' ? 'selected' : '' }}>1</option>
                    <option value="2" {{ $pengajar->jam_pelajaran == '2' ? 'selected' : '' }}>2</option>
                    <option value="3" {{ $pengajar->jam_pelajaran == '3' ? 'selected' : '' }}>3</option>
                    <option value="4" {{ $pengajar->jam_pelajaran == '4' ? 'selected' : '' }}>4</option>
                    <option value="5" {{ $pengajar->jam_pelajaran == '5' ? 'selected' : '' }}>5</option>
                    <option value="6" {{ $pengajar->jam_pelajaran == '6' ? 'selected' : '' }}>6</option>
                    <option value="7" {{ $pengajar->jam_pelajaran == '7' ? 'selected' : '' }}>7</option>
                    <option value="8" {{ $pengajar->jam_pelajaran == '8' ? 'selected' : '' }}>8</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Update Data</button>
    </form>
@endsection
