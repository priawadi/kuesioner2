<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCurahanTenagaKerja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curahan_tenaga_kerja', function (Blueprint $table) {
            $table->increments('id_curahan_tenaga_kerja');
            $table->integer('id_ketenagakerjaan');

            $table->integer('status_pekerjaan');
            $table->string('status_pekerjaan_lain', 150);
            $table->integer('status_tenaga_kerja');
            $table->integer('jumlah_tenaga_kerja');
            $table->integer('lama_trip');
            $table->integer('jumlah_trip');
            $table->integer('bagi_hasil');
            $table->integer('upah_trip');

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
        Schema::drop('curahan_tenaga_kerja');
    }
}
