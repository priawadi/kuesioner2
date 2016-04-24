<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDetilHasilTangkapan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detil_hasil_tangkapan', function (Blueprint $table) {
            $table->increments('id_detil_hasil_tangkapan');
            $table->integer('id_master_jenis_ikan');
            $table->integer('id_responden');

            $table->integer('id_bulan');
            $table->smallInteger('urutan_isian');
            $table->integer('produksi_sebulan');
            $table->float('harga_ikan');
            $table->string('jenis_ikan_lain', 100);
            $table->float('nilai_produksi');

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
        Schema::drop('detil_hasil_tangkapan');
    }
}
