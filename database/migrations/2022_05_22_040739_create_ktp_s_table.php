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
        Schema::create('ktp_s', function (Blueprint $table) {
            $table->id();
            $table->string('id_penduduk');
            $table->string('desa_ktps');
            $table->string('kec_ktps');
            $table->string('kab_ktps');
            $table->string('status_ktps');
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
        Schema::dropIfExists('ktp_s');
    }
};
