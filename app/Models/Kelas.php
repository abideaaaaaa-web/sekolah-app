<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas'; // biar gak dipluralin jadi "kela"

    protected $fillable = ['nama_kelas', 'wali_kelas', 'kapasitas', 'tahun_ajaran'];
}
