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
            $table->smallInteger('status_kepemilikan')->nullable();
            $table->integer('jumlah')->nullable();
            $table->smallInteger('kondisi')->nullable();
            $table->integer('umur_ekonomis')->nullable();
            $table->double('harga_beli')->nullable();
            $table->smallInteger('sumber_modal')->nullable();

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
