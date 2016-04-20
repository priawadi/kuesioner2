<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePartisipasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partisipasi', function (Blueprint $table) {
            $table->increments('id_partisipasi');
            
            $table->integer('parent_partisipasi');
            $table->string('pertanyaan_partisipasi', 500);
            $table->integer('kateg_partisipasi');
            $table->integer('id_master_opsional');
            
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
        Schema::drop('partisipasi');
    }
}
