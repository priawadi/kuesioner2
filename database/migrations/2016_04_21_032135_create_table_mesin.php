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
            $table->string('mesin', 150)->nullable();
            $table->integer('merek_mesin')->nullable();
            $table->integer('ukuran_mesin')->nullable();
            $table->integer('status_kepemilikan_mesin')->nullable();
            $table->integer('jenis_bbm_mesin')->nullable();
            $table->integer('tahun_pembelian_mesin')->nullable();
            $table->integer('kondisi_mesin')->nullable();
            $table->float('harga_beli_mesin')->nullable();
            $table->integer('umur_ekonomis_mesin')->nullable();
            $table->integer('sumber_modal_mesin')->nullable();
            $table->integer('id_responden');

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
