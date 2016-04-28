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
            $table->string('armada_dimiliki', 150)->nullable();
            $table->integer('jenis_armada')->nullable();
            $table->integer('ukuran_tonase')->nullable();
            $table->integer('status_kepemilikan')->nullable();
            $table->integer('tahun_pembelian')->nullable();
            $table->integer('kondisi')->nullable();
            $table->float('harga_beli')->nullable();
            $table->integer('umur_ekonomis')->nullable();
            $table->integer('sumber_modal')->nullable();

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
