@extends('layouts.app')
@section('title', 'Mata Pelajaran')

@section('content')

    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Mata Pelajaran</h1>
        <a href="{{ route('mapel.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ Tambah Mapel</a>
    </div>

    <table class="w-full bg-white rounded shadow text-sm">
        <thead class="bg-gray-200 text-left">
            <tr>
                <th class="p-3">Kode</th>
                <th class="p-3">Nama Mapel</th>
                <th class="p-3">Jumlah Jam/Minggu</th>
                <th class="p-3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($mapels as $m)
                <tr class="border-t">
                    <td class="p-3">{{ $m->kode_mapel }}</td>
                    <td class="p-3">{{ $m->nama_mapel }}</td>
                    <td class="p-3">{{ $m->jumlah_jam }} jam</td>
                    <td class="p-3 flex gap-2">
                        <a href="{{ route('mapel.edit', $m->id) }}" class="text-yellow-600">Edit</a>
                        <form action="{{ route('mapel.destroy', $m->id) }}" method="POST" onsubmit="return confirm('Hapus mapel ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4" class="p-4 text-center text-gray-500">Belum ada mata pelajaran.</td></tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-4">{{ $mapels->links() }}</div>

@endsection
