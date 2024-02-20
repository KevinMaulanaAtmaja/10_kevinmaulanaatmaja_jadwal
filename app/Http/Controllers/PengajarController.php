<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Mapel;
use App\Models\Pengajar;
use Illuminate\Http\Request;

class PengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengajar = Pengajar::latest()->get();
        return view('pengajar.index', compact('pengajar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $guru = Guru::latest()->get();
        $mapel = Mapel::latest()->get();
        return view('pengajar.create', compact('guru', 'mapel'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_guru' => 'required',
            'nama_mapel' => 'required',
            'kelas' => 'required',
            'jam_pelajaran' => 'required',
        ]);

        Pengajar::create([
            'id_guru' => $request->nama_guru,
            'id_mapel' => $request->nama_mapel,
            'kelas' => $request->kelas,
            'jam_pelajaran' => $request->jam_pelajaran,
        ]);
        return redirect('/pengajar')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengajar $pengajar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengajar $pengajar)
    {
        $guru = Guru::latest()->get();
        $mapel = Mapel::latest()->get();
        return view('pengajar.edit', compact('pengajar', 'guru', 'mapel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengajar $pengajar)
    {
        $request->validate([
            'nama_guru' => 'required',
            'nama_mapel' => 'required',
            'kelas' => 'required',
            'jam_pelajaran' => 'required',
        ]);

        $pengajar->update([
            'id_guru' => $request->nama_guru,
            'id_mapel' => $request->nama_mapel,
            'kelas' => $request->kelas,
            'jam_pelajaran' => $request->jam_pelajaran,
        ]);
        return redirect('/pengajar')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengajar $pengajar)
    {
        $pengajar->delete();
        return redirect('/pengajar')->with('success', 'Data berhasil dihapus!');
    }
}
