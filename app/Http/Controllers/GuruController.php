<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->q;

        $gurus = Guru::when($q, fn($query) => $query->where('nama', 'like', "%$q%")
                ->orWhere('nip', 'like', "%$q%")
                ->orWhere('mapel', 'like', "%$q%"))
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('guru.index', ['gurus' => $gurus, 'q' => $q]);
    }

    public function create()
    {
        return view('guru.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nip' => 'required|unique:gurus,nip',
            'nama' => 'required',
            'mapel' => 'required',
            'no_hp' => 'nullable',
            'alamat' => 'nullable',
        ]);

        Guru::create($data);

        return redirect()->route('guru.index')->with('success', 'Data guru ditambahkan.');
    }

    public function edit(Guru $guru)
    {
        return view('guru.edit', compact('guru'));
    }

    public function update(Request $request, Guru $guru)
    {
        $data = $request->validate([
            'nip' => 'required|unique:gurus,nip,' . $guru->id,
            'nama' => 'required',
            'mapel' => 'required',
            'no_hp' => 'nullable',
            'alamat' => 'nullable',
        ]);

        $guru->update($data);

        return redirect()->route('guru.index')->with('success', 'Data guru diupdate.');
    }

    public function destroy(Guru $guru)
    {
        $guru->delete();
        return back()->with('success', 'Data guru dihapus.');
    }
}
