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

            $table->string('nama', 150)->nullable();
            $table->smallInteger('status_keluarga')->nullable();
            $table->string('status_keluarga_lain', 100)->nullable();
            
            $table->integer('jenis_pekerjaan1')->nullable();
            $table->string('jenis_pekerjaan_lain1', 100)->nullable();
            $table->float('pendapatan1')->nullable();
            $table->integer('jenis_pekerjaan2')->nullable();
            $table->string('jenis_pekerjaan_lain2', 100)->nullable();
            $table->float('pendapatan2')->nullable();
            $table->integer('jenis_pekerjaan3')->nullable();
            $table->string('jenis_pekerjaan_lain3', 100)->nullable();
            $table->float('pendapatan3')->nullable();

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
