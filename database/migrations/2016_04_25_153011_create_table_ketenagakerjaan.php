<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKetenagakerjaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ketenagakerjaan', function (Blueprint $table) {
            $table->increments('id_ketenagakerjaan');
            $table->integer('id_responden');

            $table->boolean('jml_tenaga_kerja_sama')->nullable();

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
        Schema::drop('ketenagakerjaan');
    }
}
