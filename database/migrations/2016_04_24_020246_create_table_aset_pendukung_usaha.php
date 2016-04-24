<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAsetPendukungUsaha extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aset_pendukung_usaha', function (Blueprint $table) {
            $table->increments('id_aset_pendukung_usaha');
            $table->integer('id_responden');
            $table->integer('id_peralatan_tambahan');

            $table->string('peralatan_tambahan_lain', 150);
            $table->smallInteger('status_kepemilikan');
            $table->integer('jumlah');
            $table->smallInteger('kondisi');
            $table->integer('umur_ekonomis');
            $table->float('harga_beli');
            $table->smallInteger('sumber_modal');

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
        Schema::drop('aset_pendukung_usaha');
    }
}
