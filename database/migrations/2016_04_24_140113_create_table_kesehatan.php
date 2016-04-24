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
            
            $table->integer('sakit_setahun');
            $table->integer('sakit_setahun_ringan');
            $table->integer('sakit_setahun_berat');

            $table->integer('ringan_dibiarkan');
            $table->integer('ringan_beli_obat');
            $table->integer('ringan_puskesmas');
            $table->integer('ringan_dokter');
            $table->integer('ringan_alternatif');
            $table->integer('ringan_rumah_sakit');

            $table->integer('berat_dibiarkan');
            $table->integer('berat_beli_obat');
            $table->integer('berat_puskesmas');
            $table->integer('berat_dokter');
            $table->integer('berat_alternatif');
            $table->integer('berat_rumah_sakit');
            

            $table->boolean('jamkesmas')->default(FALSE);
            $table->boolean('bpjs')->default(FALSE);
            $table->boolean('asuransi')->default(FALSE);

            $table->smallInteger('frek_jamkesmas');
            $table->smallInteger('frek_bpjs');
            $table->smallInteger('frek_asuransi');

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
