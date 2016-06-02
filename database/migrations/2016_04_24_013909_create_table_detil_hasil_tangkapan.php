<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDetilHasilTangkapan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detil_hasil_tangkapan', function (Blueprint $table) {
            $table->increments('id_detil_hasil_tangkapan');
            $table->integer('id_responden');

            $table->integer('id_jenis_ikan')->nullable();

            $table->integer('id_jenis_alat_tangkap')->nullable();
            $table->string('id_jenis_alat_tangkap_lain', 255)->nullable();
            $table->integer('id_bulan')->nullable();
            $table->smallInteger('urutan_isian')->nullable();
            $table->integer('produksi_sebulan')->nullable();
            $table->double('harga_ikan')->nullable();
            $table->string('jenis_ikan_lain', 100)->nullable();
            $table->double('nilai_produksi')->nullable();

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
        Schema::drop('detil_hasil_tangkapan');
    }
}
