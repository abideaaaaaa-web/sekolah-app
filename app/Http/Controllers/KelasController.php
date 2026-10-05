<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::orderBy('nama_kelas')->paginate(10);

        return view('kelas.index', compact('kelas'));
    }

    public function create()
    {
        return view('kelas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required',
            'wali_kelas' => 'required',
            'kapasitas' => 'required|integer|min:1',
            'tahun_ajaran' => 'required',
        ]);

        Kelas::create($request->all());

        return redirect()->route('kelas.index')->with('success', 'Kelas baru berhasil dibuat.');
    }

    public function edit(Kelas $kela)
    {
        // note: nama variabel route-model-binding ikut default laravel (singular dari "kelas" -> "kela")
        return view('kelas.edit', ['kelas' => $kela]);
    }

    public function update(Request $request, Kelas $kela)
    {
        $request->validate([
            'nama_kelas' => 'required',
            'wali_kelas' => 'required',
            'kapasitas' => 'required|integer|min:1',
            'tahun_ajaran' => 'required',
        ]);

        $kela->update($request->all());

        return redirect()->route('kelas.index')->with('success', 'Data kelas diupdate.');
    }

    public function destroy(Kelas $kela)
    {
        $kela->delete();

        return redirect()->route('kelas.index')->with('success', 'Kelas dihapus.');
    }
}
