<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKonsumsi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konsumsi', function (Blueprint $table) {
            $table->increments('id_konsumsi');
            $table->integer('id_parentkonsum');
            $table->integer('id_kateg_konsum');
            $table->float('nomor_sub');
            $table->string('rincian', 255);

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
        Schema::drop('konsumsi');
    }
}
