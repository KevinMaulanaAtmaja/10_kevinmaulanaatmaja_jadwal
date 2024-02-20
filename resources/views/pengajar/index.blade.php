@extends('layout.main')
@section('konten')
    <h1>Pengajar</h1>
    <a href="{{ route('pengajar.create') }}" class="btn btn-primary my-3">Tambah Data</a>
    <a href="{{ route('guru.index') }}" class="btn btn-primary mx-3">Guru</a>
    <a href="{{ route('mapel.index') }}" class="btn btn-primary">Mapel</a>
    <table class="table table-info table-responsive table-striped ">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Guru</th>
                <th>Nama Mapel</th>
                <th>Kelas</th>
                <th>Jam Pelajaran</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengajar as $key => $p)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $p->guru->nama }}</td>
                    <td>{{ $p->mapel->nama_mapel }}</td>
                    <td>{{ $p->kelas }}</td>
                    <td>{{ $p->jam_pelajaran }}</td>
                    <td>
                        <a href="{{ route('pengajar.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('pengajar.destroy', $p->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('yakin?')">Hapus</button>
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
