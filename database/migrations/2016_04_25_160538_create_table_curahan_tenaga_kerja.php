<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCurahanTenagaKerja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curahan_tenaga_kerja', function (Blueprint $table) {
            $table->increments('id_curahan_tenaga_kerja');
            $table->integer('id_responden');
            $table->integer('status_pekerjaan');
            $table->integer('status_tenaga_kerja')->nullable();
            $table->integer('jumlah_tenaga_kerja')->nullable();
            $table->integer('lama_trip')->nullable();
            $table->integer('jumlah_trip')->nullable();
            $table->integer('bagi_hasil')->nullable();
            $table->integer('upah_trip')->nullable();

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
        Schema::drop('curahan_tenaga_kerja');
    }
}
