<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiayaOperasional extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biaya_operasional', function (Blueprint $table) {
            $table->increments('id_biaya_operasional');
            $table->integer('id_responden');
            
            $table->integer('jenis_biaya');

            $table->double('rataan_musim_puncak')->nullable();
            $table->double('rataan_musim_sedang')->nullable();
            $table->double('rataan_musim_paceklik')->nullable();

            $table->double('harga_satuan_puncak')->nullable();
            $table->double('harga_satuan_sedang')->nullable();
            $table->double('harga_satuan_paceklik')->nullable();

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
        Schema::drop('biaya_operasional');
    }
}
