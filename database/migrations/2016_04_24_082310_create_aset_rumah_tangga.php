<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsetRumahTangga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aset_rumah_tangga', function (Blueprint $table) {
            $table->increments('id_aset_rumah_tangga');
            $table->integer('id_responden');
            
            $table->integer('id_master_jenis_aset');
            $table->integer('volume');
            $table->float('nilai_satuan');
            $table->float('nilai_total');
            $table->integer('cara_perolehan');
            $table->smallInteger('jenis_aset');
            $table->float('pendapatan_produktif');

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
        Schema::drop('aset_rumah_tangga');
    }
}
