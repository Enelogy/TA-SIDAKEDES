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
        Schema::create('kelahirans', function (Blueprint $table) {
            $table->id();
            $table->string('id_penduduk');
            $table->string('anak_ke');
            $table->string('nama_lahir');
            $table->string('ttl_lahir');
            $table->string('jk_lahir');
            $table->string('alamat_lahir');
            $table->string('ayah_lahir');
            $table->string('ibu_lahir');
            $table->tinyInteger('status_lahir');
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
        Schema::dropIfExists('kelahirans');
    }
};
