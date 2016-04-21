<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableJwbNilaiNorma extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jwb_nilai_norma', function (Blueprint $table) {
            $table->increments('id_jwb_nilai_norma');
            $table->integer('id_master_opsional');
            $table->integer('id_responden');
            $table->integer('id_nilai_norma');
            $table->text('jwb_teks_nilai_norma');

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
        Schema::drop('jwb_nilai_norma');
    }
}
