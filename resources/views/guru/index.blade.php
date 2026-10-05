@extends('layouts.app')
@section('title', 'Data Guru')

@section('content')

    <h1 class="text-2xl font-bold mb-1">Data Guru</h1>
    <p class="text-gray-500 mb-4">Total: {{ $gurus->total() }} guru</p>

    <div class="flex justify-between mb-4">
        <form method="GET">
            <input type="text" name="q" value="{{ $q }}" placeholder="cari guru..." class="border rounded px-3 py-2 w-64">
        </form>
        <a href="{{ route('guru.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ Tambah Guru</a>
    </div>

    <div class="grid gap-3">
        @forelse ($gurus as $g)
            <div class="bg-white rounded shadow p-4 flex justify-between items-center">
                <div>
                    <p class="font-semibold">{{ $g->nama }} <span class="text-gray-400 font-normal">({{ $g->nip }})</span></p>
                    <p class="text-sm text-gray-600">Mapel: {{ $g->mapel }} · HP: {{ $g->no_hp ?? '-' }}</p>
                </div>
                <div class="flex gap-3 text-sm">
                    <a href="{{ route('guru.edit', $g->id) }}" class="text-yellow-600">Edit</a>
                    <form action="{{ route('guru.destroy', $g->id) }}" method="POST" onsubmit="return confirm('Hapus data guru ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600">Hapus</button>
                    </form>
                </div>
            </div>
        @empty
            <p class="text-gray-500">Belum ada data guru.</p>
        @endforelse
    </div>

    <div class="mt-4">{{ $gurus->links() }}</div>

@endsection
