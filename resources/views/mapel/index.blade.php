@extends('layout.main')
@section('konten')
<h1>Guru</h1>
<a href="{{ route('mapel.create') }}" class="btn btn-primary my-3">Tambah Data</a>
<a href="{{ route('guru.index') }}" class="btn btn-primary mx-3">Guru</a>
<a href="{{ route('pengajar.index') }}" class="btn btn-primary">Pengajar</a>
<table class="table table-info table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Mapel</th>
        <th width="200">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($mapel as $key => $m)
            <tr>
                <td>{{ $key + 1 }}</th>
                <td>{{ $m->nama_mapel }}</td>
                <td>
                    <a href="{{ route('mapel.edit', $m->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('mapel.destroy', $m->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('yakin?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        {{ $mapel->links() }}
@endsection
