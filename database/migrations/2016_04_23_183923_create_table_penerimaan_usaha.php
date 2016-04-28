<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePenerimaanUsaha extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerimaan_usaha', function (Blueprint $table) {
            $table->increments('id_penerimaan_usaha');
            $table->integer('id_responden');

            $table->string('bulan_tidak_tangkap', 100)->nullable();
            $table->integer('total_bulan')->nullable();
            $table->text('alasan_tidak_melaut')->nullable();
            $table->boolean('hari_tidak_tangkap')->nullable();
            $table->string('daftar_hari', 100)->nullable();
            $table->integer('total_hari_tidak_melaut')->nullable();
            $table->integer('total_trip')->nullable();

            $table->softDeletes();
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
        Schema::drop('penerimaan_usaha');
    }
}
