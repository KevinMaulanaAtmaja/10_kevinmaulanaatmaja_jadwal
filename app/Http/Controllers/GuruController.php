<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        public function index()
    {
        $guru = Guru::latest()->paginate(4);
        return view('guru.index', compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guru.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'no_hp' => 'required|min:12',
            'foto' => 'required|image|mimes:png,jpg,gif,jpeg',
        ]);

        $namaFoto = date('YmdHis') . '.' . $request->file('foto')->extension();
        $request->foto->storeAs('public/images', $namaFoto);

        Guru::create([
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'foto' => $namaFoto,
        ]);

        return redirect('/guru')->with('success', 'Berhasil tambah data!');
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
        $guru = Guru::find($id);
        return view('guru.edit', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'no_hp' => 'required|min:12',
            'foto' => 'nullable|image|mimes:png,jpg,gif,jpeg',
        ]);
        $guru = Guru::find($id);

        if ($request->hasFile('foto')) {
            Storage::delete('public/images/' . $guru->foto);
            $namaFoto = date('ymdHs') . '.' . $request->foto->extension();
            $request->foto->storeAs('public/images', $namaFoto);

            $data = [
                'nama' => $request->nama,
                'no_hp' => $request->no_hp,
                'foto' => $namaFoto,
            ];
            $guru->update($data);
        } else {
            $data = [
                'nama' => $request->nama,
                'no_hp' => $request->no_hp,
            ];
            $guru->update($data);
        }


        return redirect('/guru')->with('success', 'Berhasil mengubah data!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $guru = Guru::find($id);
        // dd($id);

        if ($guru){
            Storage::delete('storage/images/' . $guru->foto);
            $guru->delete();
            return redirect('/guru')->with('success', 'Berhasil menghapus data!');
        }

    }
}
