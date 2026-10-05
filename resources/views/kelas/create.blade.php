@extends('layouts.app')
@section('title', 'Tambah Kelas')

@section('content')

    <h1 class="text-2xl font-bold mb-4">Tambah Kelas</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 border border-red-400 rounded p-3 mb-4">
            @foreach ($errors->all() as $err)
                <p>{{ $err }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('kelas.store') }}" method="POST" class="bg-white p-6 rounded shadow space-y-4">
        @csrf
        <div>
            <label class="block mb-1 font-medium">Nama Kelas</label>
            <input name="nama_kelas" value="{{ old('nama_kelas') }}" placeholder="cth: 9C" class="border rounded w-full px-3 py-2">
        </div>
        <div>
            <label class="block mb-1 font-medium">Wali Kelas</label>
            <input name="wali_kelas" value="{{ old('wali_kelas') }}" class="border rounded w-full px-3 py-2">
        </div>
        <div>
            <label class="block mb-1 font-medium">Kapasitas</label>
            <input type="number" name="kapasitas" value="{{ old('kapasitas') }}" class="border rounded w-full px-3 py-2">
        </div>
        <div>
            <label class="block mb-1 font-medium">Tahun Ajaran</label>
            <input name="tahun_ajaran" value="{{ old('tahun_ajaran') }}" placeholder="cth: 2025/2026" class="border rounded w-full px-3 py-2">
        </div>
        <div class="flex gap-2">
            <button class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
            <a href="{{ route('kelas.index') }}" class="bg-gray-300 px-4 py-2 rounded">Batal</a>
        </div>
    </form>

@endsection
