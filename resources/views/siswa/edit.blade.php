@extends('layouts.app')
@section('title', 'Edit Siswa')

@section('content')

    <h1 class="text-2xl font-bold mb-4">Edit Siswa</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 border border-red-400 rounded p-3 mb-4">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST" class="bg-white p-6 rounded shadow space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block mb-1 font-medium">NIS</label>
            <input type="text" name="nis" value="{{ old('nis', $siswa->nis) }}" class="border rounded w-full px-3 py-2">
        </div>

        <div>
            <label class="block mb-1 font-medium">Nama</label>
            <input type="text" name="nama" value="{{ old('nama', $siswa->nama) }}" class="border rounded w-full px-3 py-2">
        </div>

        <div>
            <label class="block mb-1 font-medium">Kelas</label>
            <input type="text" name="kelas" value="{{ old('kelas', $siswa->kelas) }}" class="border rounded w-full px-3 py-2">
        </div>

        <div>
            <label class="block mb-1 font-medium">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="border rounded w-full px-3 py-2">
                <option value="L" {{ $siswa->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ $siswa->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div>
            <label class="block mb-1 font-medium">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $siswa->tanggal_lahir) }}" class="border rounded w-full px-3 py-2">
        </div>

        <div>
            <label class="block mb-1 font-medium">Alamat</label>
            <textarea name="alamat" class="border rounded w-full px-3 py-2">{{ old('alamat', $siswa->alamat) }}</textarea>
        </div>

        <div class="flex gap-2">
            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
            <a href="{{ route('siswa.index') }}" class="bg-gray-300 px-4 py-2 rounded">Batal</a>
        </div>
    </form>

@endsection
