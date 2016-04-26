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
            $table->string('mesin', 150);
            $table->integer('merek_mesin');
            $table->integer('ukuran_mesin');
            $table->integer('status_kepemilikan_mesin');
            $table->integer('jenis_bbm_mesin');
            $table->integer('tahun_pembelian_mesin');
            $table->integer('kondisi_mesin');
            $table->float('harga_beli_mesin');
            $table->integer('umur_ekonomis_mesin');
            $table->integer('sumber_modal_mesin');
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
