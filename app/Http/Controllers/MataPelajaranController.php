<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    public function index()
    {
        $mapels = MataPelajaran::orderBy('nama_mapel')->paginate(10);

        return view('mapel.index', compact('mapels'));
    }

    public function create()
    {
        return view('mapel.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_mapel' => 'required|unique:mata_pelajaran,kode_mapel',
            'nama_mapel' => 'required',
            'jumlah_jam' => 'required|integer|min:1',
        ]);

        MataPelajaran::create($request->all());

        return redirect()->route('mapel.index')->with('success', 'Mata pelajaran ditambahkan.');
    }

    public function edit(MataPelajaran $mapel)
    {
        return view('mapel.edit', compact('mapel'));
    }

    public function update(Request $request, MataPelajaran $mapel)
    {
        $request->validate([
            'kode_mapel' => 'required|unique:mata_pelajaran,kode_mapel,' . $mapel->id,
            'nama_mapel' => 'required',
            'jumlah_jam' => 'required|integer|min:1',
        ]);

        $mapel->update($request->all());

        return redirect()->route('mapel.index')->with('success', 'Mata pelajaran diupdate.');
    }

    public function destroy(MataPelajaran $mapel)
    {
        $mapel->delete();

        return redirect()->route('mapel.index')->with('success', 'Mata pelajaran dihapus.');
    }
}
