<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHasilTangkapan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_tangkapan', function (Blueprint $table) {
            $table->increments('id_hasil_tangkapan');
            $table->integer('id_responden');

            $table->integer('id_bulan')->nullable();
            $table->integer('id_musim')->nullable();
            // $table->integer('id_jenis_alat_tangkap')->nullable();
            
            $table->integer('jumlah_produksi')->nullable();
            $table->integer('jumlah_nilai_produksi')->nullable();
            $table->integer('total_trip')->nullable();

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
        Schema::drop('hasil_tangkapan');
    }
}
