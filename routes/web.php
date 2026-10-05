<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MataPelajaranController;

/*
|--------------------------------------------------------------------------
| Route data sekolah
|--------------------------------------------------------------------------
| Tinggal tempel bagian ini ke routes/web.php punya kalian
| (yg bawaan Laravel, jangan dihapus semua isinya)
*/

Route::redirect('/', '/siswa');

Route::resource('siswa', SiswaController::class)->except(['show']);
Route::resource('guru', GuruController::class)->except(['show']);
Route::resource('kelas', KelasController::class)->except(['show']);
Route::resource('mapel', MataPelajaranController::class)->except(['show']);
