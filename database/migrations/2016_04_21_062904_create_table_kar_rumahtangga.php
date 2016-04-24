<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKarRumahtangga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kar_rumahtangga', function (Blueprint $table) {
            $table->increments('id_kar_rumah_tangga');
            $table->integer('id_responden');
            $table->smallInteger('jenis_kelamin');
            $table->smallInteger('umur');
            $table->string('nama', 150);
            $table->smallInteger('status_keluarga');
            $table->string('status_keluarga_lain', 100);
            $table->integer('id_pendidikan_formal');

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
        Schema::drop('kar_rumahtangga');
    }
}
