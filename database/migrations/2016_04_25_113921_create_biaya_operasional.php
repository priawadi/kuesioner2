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
            $table->string('jenis_biaya_lain', 150)->nullable();
            $table->string('satuan', 30)->nullable();

            $table->float('rataan_musim_puncak')->nullable();
            $table->float('rataan_musim_sedang')->nullable();
            $table->float('rataan_musim_paceklik')->nullable();
            
            $table->float('harga')->nullable();
            
            $table->float('total_puncak')->nullable();
            $table->float('total_sedang')->nullable();
            $table->float('total_paceklik')->nullable();

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
