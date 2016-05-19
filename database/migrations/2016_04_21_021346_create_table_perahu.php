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

            $table->integer('panjang')->nullable();
            $table->integer('lebar')->nullable();
            $table->integer('tinggi')->nullable();
            
            $table->integer('tonase')->nullable();
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
        Schema::drop('perahu');
    }
}
