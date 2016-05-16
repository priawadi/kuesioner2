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
            $table->smallInteger('stat_responden')->nullable();
            $table->integer('pengalaman_usaha')->nullable();
            
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
