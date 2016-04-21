<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNilaiNorma extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_norma', function (Blueprint $table) {
            $table->increments('id_nilai_norma');

            $table->integer('parent_nilai_norma');
            $table->string('pertanyaan_nilai_norma', 500);
            $table->integer('kateg_nilai_norma');
            $table->integer('id_master_opsional');
            $table->boolean('is_reason')->default(FALSE);
            
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
        Schema::drop('nilai_norma');
    }
}
