<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKesehatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kesehatan', function (Blueprint $table) {
            $table->increments('id_kesehatan');
            $table->integer('id_responden');
            
            $table->integer('sakit_setahun')->nullable();
            $table->integer('sakit_setahun_ringan')->nullable();
            $table->integer('sakit_setahun_berat')->nullable();

            $table->integer('ringan_dibiarkan')->nullable();
            $table->integer('ringan_beli_obat')->nullable();
            $table->integer('ringan_puskesmas')->nullable();
            $table->integer('ringan_dokter')->nullable();
            $table->integer('ringan_alternatif')->nullable();
            $table->integer('ringan_rumah_sakit')->nullable();

            $table->integer('berat_dibiarkan')->nullable();
            $table->integer('berat_beli_obat')->nullable();
            $table->integer('berat_puskesmas')->nullable();
            $table->integer('berat_dokter')->nullable();
            $table->integer('berat_alternatif')->nullable();
            $table->integer('berat_rumah_sakit')->nullable();

            $table->text('alasan_dibiarkan')->nullable();
            $table->text('alasan_beli_obat')->nullable();
            $table->text('alasan_puskesmas')->nullable();
            $table->text('alasan_dokter')->nullable();
            $table->text('alasan_alternatif')->nullable();
            $table->text('alasan_rumah_sakit')->nullable();

            $table->boolean('jamkesmas')->nullable();
            $table->boolean('bpjs')->nullable();
            $table->boolean('asuransi')->nullable();

            $table->smallInteger('frek_jamkesmas')->nullable();
            $table->smallInteger('frek_bpjs')->nullable();
            $table->smallInteger('frek_asuransi')->nullable();

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
        Schema::drop('kesehatan');
    }
}
