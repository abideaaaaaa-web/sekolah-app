@extends('layouts.app')
@section('title', 'Data Siswa')

@section('content')

    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Data Siswa</h1>
        <a href="{{ route('siswa.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            + Tambah Siswa
        </a>
    </div>

    <form method="GET" class="mb-4">
        <input type="text" name="q" value="{{ $keyword }}" placeholder="Cari nama / NIS / kelas..."
               class="border rounded px-3 py-2 w-72">
        <button class="bg-gray-600 text-white px-3 py-2 rounded">Cari</button>
    </form>

    <div class="bg-white rounded shadow overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-200 text-left">
                <tr>
                    <th class="p-3">NIS</th>
                    <th class="p-3">Nama</th>
                    <th class="p-3">Kelas</th>
                    <th class="p-3">JK</th>
                    <th class="p-3">Tgl Lahir</th>
                    <th class="p-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($siswas as $s)
                    <tr class="border-t">
                        <td class="p-3">{{ $s->nis }}</td>
                        <td class="p-3">{{ $s->nama }}</td>
                        <td class="p-3">{{ $s->kelas }}</td>
                        <td class="p-3">{{ $s->jenis_kelamin }}</td>
                        <td class="p-3">{{ $s->tanggal_lahir ?? '-' }}</td>
                        <td class="p-3 flex gap-2">
                            <a href="{{ route('siswa.edit', $s->id) }}" class="text-yellow-600 hover:underline">Edit</a>
                            <form action="{{ route('siswa.destroy', $s->id) }}" method="POST"
                                  onsubmit="return confirm('Yakin hapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600 hover:underline">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="6" class="p-4 text-center text-gray-500">Belum ada data siswa.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $siswas->links() }}
    </div>

@endsection
