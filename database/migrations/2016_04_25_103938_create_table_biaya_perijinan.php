<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBiayaPerijinan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biaya_perijinan', function (Blueprint $table) {
            $table->increments('id_biaya_perijinan');
            $table->integer('id_responden');

            $table->integer('jenis_biaya_perijinan');
            $table->string('jenis_biaya_perijinan_lain', 100)->nullable();
            $table->integer('frek_satuan');
            $table->float('harga_satuan');
            $table->float('total_biaya');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('biaya_perijinan');
    }
}
