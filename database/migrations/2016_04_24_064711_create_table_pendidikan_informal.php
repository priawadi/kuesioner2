<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePendidikanInformal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendidikan_informal', function (Blueprint $table) {
            $table->increments('id_pendidikan_informal');
            $table->integer('id_kar_rumah_tangga');

            $table->string('jenis_pelatihan', 300);
            $table->smallInteger('waktu_pelaksanaan');
            $table->integer('sumber_dana');
            $table->integer('tujuan_pelatihan');
            $table->string('tujuan_pelatihan_lain', 300);

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
        Schema::drop('pendidikan_informal');
    }
}