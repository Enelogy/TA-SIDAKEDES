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
        Schema::create('kematians', function (Blueprint $table) {
            $table->id();
            $table->string('id_penduduk');
            $table->string('nama_kem');
            $table->string('jk_kem');
            $table->string('alamat_kem');
            $table->string('hari');
            $table->string('umur_kem');
            $table->string('tanggal');
            $table->string('tmpt_kem');
            $table->string('penyebab');
            $table->string('hub_kem');
            $table->tinyInteger('status_kem');
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
        Schema::dropIfExists('kematians');
    }
};
