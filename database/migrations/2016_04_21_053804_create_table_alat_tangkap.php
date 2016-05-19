<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAlatTangkap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alat_tangkap', function (Blueprint $table) {
            $table->increments('id_alat_tangkap');
            $table->integer('id_responden');

            $table->integer('jenis_alat_tangkap')->nullable();
            $table->integer('nama_alat_tangkap')->nullable();
            $table->integer('ukuran_panjang')->nullable();
            $table->integer('ukuran_lebar')->nullable();
            $table->integer('ukuran_tinggi')->nullable();
            $table->integer('ukuran_mata_jaring')->nullable();
            $table->integer('ukuran_mata_pancing')->nullable();
            $table->integer('jumlah')->nullable();
            $table->string('satuan_jumlah', 30)->nullable();
            $table->integer('kondisi')->nullable();
            $table->integer('tahun_pembelian')->nullable();
            $table->double('harga_beli')->nullable();
            $table->string('satuan_harga_beli', 30)->nullable();
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
        Schema::drop('alat_tangkap');
    }
}
