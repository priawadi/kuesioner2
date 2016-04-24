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
            $table->integer('status_rumah_tangga');
            $table->smallInteger('jenis_kelamin');
            $table->smallInteger('umur');

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
