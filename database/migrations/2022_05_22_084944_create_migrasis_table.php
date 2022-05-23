<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('migrasis', function (Blueprint $table) {
            $table->id();
            $table->string('id_penduduk');
            $table->string('alamat_tujuan');
            $table->string('jumlah_pindah');
            $table->string('status_migrasi');
            $table->string('desa_migrasi');
            $table->string('jenis_migrasi');
            $table->string('kec_migrasi');
            $table->string('kab_migrasi');
            $table->string('prov_migrasi');
            $table->string('tgl_migrasi');
            $table->string('alasan_migrasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('migrasis');
    }
};
