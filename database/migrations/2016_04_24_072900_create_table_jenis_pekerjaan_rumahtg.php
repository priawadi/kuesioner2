<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableJenisPekerjaanRumahtg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_pekerjaan_rumahtg', function (Blueprint $table) {
            $table->increments('id_jenis_pekerjaan_rumahtg');
            $table->integer('id_responden');

            $table->string('nama', 150);
            $table->smallInteger('status_keluarga');
            $table->string('status_keluarga_lain', 100);
            
            $table->integer('jenis_pekerjaan1');
            $table->string('jenis_pekerjaan_lain1', 100);
            $table->float('pendapatan1');
            $table->integer('jenis_pekerjaan2');
            $table->string('jenis_pekerjaan_lain2', 100);
            $table->float('pendapatan2');
            $table->integer('jenis_pekerjaan3');
            $table->string('jenis_pekerjaan_lain3', 100);
            $table->float('pendapatan3');

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
        Schema::drop('jenis_pekerjaan_rumahtg');
    }
}
