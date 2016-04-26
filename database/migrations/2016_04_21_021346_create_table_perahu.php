<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePerahu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perahu', function (Blueprint $table) {
            $table->increments('id_perahu');
            $table->integer('id_responden');
            $table->string('armada_dimiliki', 150);
            $table->integer('jenis_armada');
            $table->integer('ukuran_tonase');
            $table->integer('status_kepemilikan');
            $table->integer('tahun_pembelian');
            $table->integer('kondisi');
            $table->float('harga_beli');
            $table->integer('umur_ekonomis');
            $table->integer('sumber_modal');

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
        Schema::drop('perahu');
    }
}
