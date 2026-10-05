<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // nama tabel dipaksa "kelas" biar gak keplesetin ke "kela" sama laravel :p
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kelas', 30);
            $table->string('wali_kelas');
            $table->integer('kapasitas');
            $table->string('tahun_ajaran', 15);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kelas');
    }
};
