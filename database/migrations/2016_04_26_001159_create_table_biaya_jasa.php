<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBiayaJasa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biaya_jasa', function (Blueprint $table) {
            $table->increments('id_biaya_jasa');
            $table->integer('id_responden');

            $table->integer('jenis_biaya_jasa');
            $table->string('jenis_biaya_jasa_lain', 150);
            $table->string('satuan', 50);
            $table->integer('jumlah_jasa');
            $table->float('harga_jasa');
            $table->float('total_nilai');

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
        Schema::drop('biaya_jasa');
    }
}
