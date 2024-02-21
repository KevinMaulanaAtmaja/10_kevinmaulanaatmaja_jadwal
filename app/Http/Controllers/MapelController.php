<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Pengajar;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mapel = Mapel::latest()->paginate(3);
        return view('mapel.index', compact('mapel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mapel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_mapel' => 'required|min:1'
        ]);

        Mapel::create([
            'nama_mapel' => $request->nama_mapel
        ]);
        return redirect('/mapel')->with('success', 'Berhasil menambahkan data!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mapel = Mapel::find($id);
        return view('mapel.edit', compact('mapel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_mapel' => 'required|min:1'
        ]);
        $mapel = Mapel::find($id);
        $mapel->update([
            'nama_mapel' => $request->nama_mapel
        ]);
        return redirect('/mapel')->with('success', 'Berhasil mengubah data!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mapel = Mapel::find($id);
        if ($mapel) {
            // Periksa apakah mapel masih dipakai dalam peminjaman
            $p = Pengajar::where('id_mapel', $mapel->id)->exists();
            // dd($p);
            if ($p) {
                return redirect('/mapel')->with('error', 'Data mapel masih dipakai dan tidak dapat dihapus!');
            }

            $mapel->delete();
            return redirect('/mapel')->with('success', 'Data berhasil dihapus!');
        }
    }
}
