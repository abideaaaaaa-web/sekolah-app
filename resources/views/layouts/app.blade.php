<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Data Sekolah')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

    <nav class="bg-blue-700 text-white px-6 py-3 flex gap-6 items-center">
        <span class="font-bold text-lg">SIM Sekolah</span>
        <a href="{{ route('siswa.index') }}" class="hover:underline {{ request()->routeIs('siswa.*') ? 'underline font-semibold' : '' }}">Siswa</a>
        <a href="{{ route('guru.index') }}" class="hover:underline {{ request()->routeIs('guru.*') ? 'underline font-semibold' : '' }}">Guru</a>
        <a href="{{ route('kelas.index') }}" class="hover:underline {{ request()->routeIs('kelas.*') ? 'underline font-semibold' : '' }}">Kelas</a>
        <a href="{{ route('mapel.index') }}" class="hover:underline {{ request()->routeIs('mapel.*') ? 'underline font-semibold' : '' }}">Mata Pelajaran</a>
    </nav>

    <main class="max-w-5xl mx-auto p-6">

        @if (session('success'))
            <div class="mb-4 bg-green-100 border border-green-400 text-green-800 px-4 py-2 rounded">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')

    </main>

</body>
</html>
