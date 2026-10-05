@extends('layouts.app')
@section('title', 'Data Kelas')

@section('content')

    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Data Kelas</h1>
        <a href="{{ route('kelas.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ Tambah Kelas</a>
    </div>

    <table class="w-full bg-white rounded shadow text-sm">
        <thead class="bg-gray-200 text-left">
            <tr>
                <th class="p-3">Nama Kelas</th>
                <th class="p-3">Wali Kelas</th>
                <th class="p-3">Kapasitas</th>
                <th class="p-3">Tahun Ajaran</th>
                <th class="p-3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($kelas as $k)
                <tr class="border-t">
                    <td class="p-3">{{ $k->nama_kelas }}</td>
                    <td class="p-3">{{ $k->wali_kelas }}</td>
                    <td class="p-3">{{ $k->kapasitas }} siswa</td>
                    <td class="p-3">{{ $k->tahun_ajaran }}</td>
                    <td class="p-3 flex gap-2">
                        <a href="{{ route('kelas.edit', $k->id) }}" class="text-yellow-600">Edit</a>
                        <form action="{{ route('kelas.destroy', $k->id) }}" method="POST" onsubmit="return confirm('Hapus kelas ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5" class="p-4 text-center text-gray-500">Belum ada kelas.</td></tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-4">{{ $kelas->links() }}</div>

@endsection
