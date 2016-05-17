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
            $table->integer('volume')->nullable();
            $table->double('nilai_satuan')->nullable();
            $table->double('nilai_total')->nullable();
            $table->integer('cara_perolehan')->nullable();
            $table->smallInteger('jenis_aset')->nullable();
            $table->double('pendapatan_produktif')->nullable();

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
