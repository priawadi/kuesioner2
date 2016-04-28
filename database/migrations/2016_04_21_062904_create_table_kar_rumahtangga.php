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
            $table->smallInteger('jenis_kelamin')->nullable();
            $table->smallInteger('umur')->nullable();
            $table->string('nama', 150)->nullable();
            $table->smallInteger('status_keluarga')->nullable();
            $table->string('status_keluarga_lain', 100)->nullable();
            $table->integer('id_pendidikan_formal')->nullable();

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
