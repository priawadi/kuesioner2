<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableJawabanKonsumsi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_konsumsi', function (Blueprint $table) {
            $table->increments('id_jawaban_konsumsi');
            $table->integer('id_responden');
            $table->integer('id_konsumsi');
            $table->float('jawaban');

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
        Schema::drop('jawaban_konsumsi');
    }
}
