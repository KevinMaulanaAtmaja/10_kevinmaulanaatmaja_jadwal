@extends('layout.main')
@section('konten')
    <h1>Guru</h1>
    <a href="{{ route('guru.create') }}" class="btn btn-primary my-3">Tambah Data</a>
    <a href="{{ route('guru.create') }}" class="btn btn-primary">Mapel</a>
    <a href="{{ route('mapel.index') }}" class="btn btn-primary mx-3">Pengajar</a>
    <table class="table table-info table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No HP</th>
            <th>Foto</th>
            <th width="200">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($guru as $key => $g)
                <tr>
                    <td>{{ $key + 1 }}</th>
                    <td>{{ $g->nama }}</td>
                    <td>{{ $g->no_hp }}</td>
                    <td><img class="img-thumbnail " src="{{ asset('storage/images/'. $g->foto) }}" width="80"></td>
                    <td>
                        <a href="{{ route('guru.edit', $g->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('guru.destroy', $g->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('yakin?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
            {{ $guru->links() }}
@endsection
