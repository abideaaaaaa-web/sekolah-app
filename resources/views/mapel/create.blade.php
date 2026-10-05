@extends('layouts.app')
@section('title', 'Tambah Mapel')

@section('content')

    <h1 class="text-2xl font-bold mb-4">Tambah Mata Pelajaran</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 border border-red-400 rounded p-3 mb-4">
            @foreach ($errors->all() as $err)
                <p>{{ $err }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('mapel.store') }}" method="POST" class="bg-white p-6 rounded shadow space-y-4">
        @csrf
        <div>
            <label class="block mb-1 font-medium">Kode Mapel</label>
            <input name="kode_mapel" value="{{ old('kode_mapel') }}" placeholder="cth: MTK01" class="border rounded w-full px-3 py-2">
        </div>
        <div>
            <label class="block mb-1 font-medium">Nama Mapel</label>
            <input name="nama_mapel" value="{{ old('nama_mapel') }}" class="border rounded w-full px-3 py-2">
        </div>
        <div>
            <label class="block mb-1 font-medium">Jumlah Jam / Minggu</label>
            <input type="number" name="jumlah_jam" value="{{ old('jumlah_jam', 2) }}" class="border rounded w-full px-3 py-2">
        </div>
        <div class="flex gap-2">
            <button class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
            <a href="{{ route('mapel.index') }}" class="bg-gray-300 px-4 py-2 rounded">Batal</a>
        </div>
    </form>

@endsection
