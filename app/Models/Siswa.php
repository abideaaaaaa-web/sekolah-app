<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'nis', 'nama', 'kelas', 'jenis_kelamin', 'tanggal_lahir', 'alamat',
    ];
}
