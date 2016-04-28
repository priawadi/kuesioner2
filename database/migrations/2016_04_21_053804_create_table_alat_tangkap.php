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
/*            $table->integer('id_parent_alat'); */
            $table->string('jenis_alat_tangkap');
            $table->integer('jumlah_alat_tangkap')->nullable();
            $table->integer('waktu_penggunaan_alat')->nullable();
            $table->integer('status_kepemilikan_alat')->nullable();
            $table->string('spesifikasi_alat')->nullable();
            $table->integer('kondisi_alat')->nullable();
            $table->float('harga_beli_alat')->nullable();
            $table->integer('umur_ekonomis_alat')->nullable();
            $table->integer('sumber_modal_alat')->nullable();
            $table->integer('id_responden');
            $table->string('jenis_alat_tangkap_lain', 150)->nullable();

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
