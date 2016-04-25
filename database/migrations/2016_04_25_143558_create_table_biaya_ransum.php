<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBiayaRansum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biaya_ransum', function (Blueprint $table) {
            $table->increments('id_biaya_ransum');
            $table->integer('id_responden');
            
            $table->integer('jenis_biaya');
            $table->string('jenis_biaya_lain', 150);
            $table->string('satuan', 30);

            $table->float('rataan_musim_puncak');
            $table->float('rataan_musim_sedang');
            $table->float('rataan_musim_paceklik');
            
            $table->float('harga');
            
            $table->float('total_puncak');
            $table->float('total_sedang');
            $table->float('total_paceklik');

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
        Schema::drop('biaya_ransum');
    }
}
