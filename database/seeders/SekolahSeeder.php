<?php

namespace Database\Seeders;

use App\Models\Siswa;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\MataPelajaran;
use Illuminate\Database\Seeder;

class SekolahSeeder extends Seeder
{
    public function run()
    {
        Kelas::insert([
            ['nama_kelas' => '7A', 'wali_kelas' => 'Ibu Sri Wahyuni', 'kapasitas' => 32, 'tahun_ajaran' => '2025/2026', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => '8B', 'wali_kelas' => 'Bapak Ahmad Fauzi', 'kapasitas' => 30, 'tahun_ajaran' => '2025/2026', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => '9C', 'wali_kelas' => 'Ibu Dewi Lestari', 'kapasitas' => 28, 'tahun_ajaran' => '2025/2026', 'created_at' => now(), 'updated_at' => now()],
        ]);

        Guru::insert([
            ['nip' => '198501012010011001', 'nama' => 'Ahmad Fauzi, S.Pd', 'mapel' => 'Matematika', 'no_hp' => '081234567890', 'alamat' => 'Jl. Merdeka No. 10', 'created_at' => now(), 'updated_at' => now()],
            ['nip' => '199002152012012002', 'nama' => 'Dewi Lestari, S.Pd', 'mapel' => 'Bahasa Indonesia', 'no_hp' => '081298765432', 'alamat' => 'Jl. Kenanga No. 5', 'created_at' => now(), 'updated_at' => now()],
            ['nip' => '198804202011012003', 'nama' => 'Sri Wahyuni, S.Pd', 'mapel' => 'IPA', 'no_hp' => '081312345678', 'alamat' => 'Jl. Mawar No. 3', 'created_at' => now(), 'updated_at' => now()],
        ]);

        MataPelajaran::insert([
            ['kode_mapel' => 'MTK01', 'nama_mapel' => 'Matematika', 'jumlah_jam' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mapel' => 'IND01', 'nama_mapel' => 'Bahasa Indonesia', 'jumlah_jam' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mapel' => 'IPA01', 'nama_mapel' => 'Ilmu Pengetahuan Alam', 'jumlah_jam' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mapel' => 'ING01', 'nama_mapel' => 'Bahasa Inggris', 'jumlah_jam' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);

        Siswa::insert([
            ['nis' => '2025001', 'nama' => 'Budi Santoso', 'kelas' => '7A', 'jenis_kelamin' => 'L', 'tanggal_lahir' => '2013-04-11', 'alamat' => 'Jl. Anggrek No. 1', 'created_at' => now(), 'updated_at' => now()],
            ['nis' => '2025002', 'nama' => 'Siti Aminah', 'kelas' => '7A', 'jenis_kelamin' => 'P', 'tanggal_lahir' => '2013-06-20', 'alamat' => 'Jl. Melati No. 8', 'created_at' => now(), 'updated_at' => now()],
            ['nis' => '2025003', 'nama' => 'Rendra Wijaya', 'kelas' => '8B', 'jenis_kelamin' => 'L', 'tanggal_lahir' => '2012-01-15', 'alamat' => 'Jl. Kamboja No. 2', 'created_at' => now(), 'updated_at' => now()],
            ['nis' => '2025004', 'nama' => 'Putri Ayu', 'kelas' => '9C', 'jenis_kelamin' => 'P', 'tanggal_lahir' => '2011-09-05', 'alamat' => 'Jl. Dahlia No. 7', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
