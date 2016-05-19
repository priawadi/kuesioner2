<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMesin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesin', function (Blueprint $table) {
            $table->increments('id_mesin');
            $table->integer('id_responden');

            $table->integer('jenis')->nullable();
            $table->string('merk', 300)->nullable();
            $table->integer('bahan_bakar')->nullable();
            $table->integer('kekuatan')->nullable();
            $table->integer('jumlah')->nullable();
            $table->integer('kondisi')->nullable();
            $table->integer('tahun_pembelian')->nullable();
            $table->double('harga_beli')->nullable();
            $table->integer('umur_teknis')->nullable();
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
        Schema::drop('mesin');
    }
}
