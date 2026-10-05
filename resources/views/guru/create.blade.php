@extends('layouts.app')
@section('title', 'Tambah Guru')

@section('content')

    <h1 class="text-2xl font-bold mb-4">Tambah Guru</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 border border-red-400 rounded p-3 mb-4">
            @foreach ($errors->all() as $err)
                <p>{{ $err }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('guru.store') }}" method="POST" class="bg-white p-6 rounded shadow space-y-4">
        @csrf
        <div>
            <label class="block mb-1 font-medium">NIP</label>
            <input name="nip" value="{{ old('nip') }}" class="border rounded w-full px-3 py-2">
        </div>
        <div>
            <label class="block mb-1 font-medium">Nama</label>
            <input name="nama" value="{{ old('nama') }}" class="border rounded w-full px-3 py-2">
        </div>
        <div>
            <label class="block mb-1 font-medium">Mata Pelajaran yang diampu</label>
            <input name="mapel" value="{{ old('mapel') }}" class="border rounded w-full px-3 py-2">
        </div>
        <div>
            <label class="block mb-1 font-medium">No HP</label>
            <input name="no_hp" value="{{ old('no_hp') }}" class="border rounded w-full px-3 py-2">
        </div>
        <div>
            <label class="block mb-1 font-medium">Alamat</label>
            <textarea name="alamat" class="border rounded w-full px-3 py-2">{{ old('alamat') }}</textarea>
        </div>
        <div class="flex gap-2">
            <button class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
            <a href="{{ route('guru.index') }}" class="bg-gray-300 px-4 py-2 rounded">Batal</a>
        </div>
    </form>

@endsection
