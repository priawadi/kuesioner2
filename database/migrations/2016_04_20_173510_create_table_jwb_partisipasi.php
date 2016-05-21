<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableJwbPartisipasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jwb_partisipasi', function (Blueprint $table) {
            $table->increments('id_jwb_partisipasi');
            $table->integer('id_master_opsional')->nullable();
            $table->integer('id_responden');
            $table->integer('id_partisipasi');

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
        Schema::drop('jwb_partisipasi');
    }
}
