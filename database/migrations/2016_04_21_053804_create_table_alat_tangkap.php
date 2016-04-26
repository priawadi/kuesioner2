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
            $table->integer('jumlah_alat_tangkap');
            $table->integer('waktu_penggunaan_alat');
            $table->integer('status_kepemilikan_alat');
            $table->string('spesifikasi_alat');
            $table->integer('kondisi_alat');
            $table->float('harga_beli_alat');
            $table->integer('umur_ekonomis_alat');
            $table->integer('sumber_modal_alat');
            $table->integer('id_responden');
            $table->string('jenis_alat_tangkap_lain', 150);

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
