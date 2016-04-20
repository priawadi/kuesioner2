<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableResponden extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responden', function (Blueprint $table) {
            $table->increments('id_responden');
            $table->string('id_id', 150)->nullable();
            $table->string('nama_responden', 150)->nullable();
            $table->string('suku', 150)->nullable();
            $table->string('kampung', 150)->nullable();
            $table->string('dusun', 150)->nullable();
            $table->string('kelurahan', 150)->nullable();
            $table->string('kecamatan', 150)->nullable();
            $table->string('kabupaten', 150)->nullable();
            $table->string('provinsi', 150)->nullable();
            $table->string('tipologi', 150)->nullable();
            $table->smallInteger('stat_responden')->nullable();
            $table->string('pengalaman_usaha', 3)->nullable();
            $table->string('kodeawal_id', 3)->nullable();
            $table->string('kodeawal_nama', 3)->nullable();
            $table->string('kodeawal_suku', 3)->nullable();
            $table->string('kodeawal_kampung', 3)->nullable();
            $table->string('kodeawal_dusun', 3)->nullable();
            $table->string('kodeawal_kelurahan', 3)->nullable();
            $table->string('kodeawal_kecamatan', 3)->nullable();
            $table->string('kodeawal_kabupaten', 3)->nullable();
            $table->string('kodeawal_provinsi', 3)->nullable();
            $table->string('kodecacah_id', 3)->nullable();
            $table->string('kodecacah_nama', 3)->nullable();
            $table->string('kodecacah_suku', 3)->nullable();
            $table->string('kodecacah_kampung', 3)->nullable();
            $table->string('kodecacah_dusun', 3)->nullable();
            $table->string('kodecacah_kelurahan', 3)->nullable();
            $table->string('kodecacah_kecamatan', 3)->nullable();
            $table->string('kodecacah_kabupaten', 3)->nullable();
            $table->string('kodecacah_provinsi', 3)->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('responden');
    }
}
