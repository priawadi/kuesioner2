<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMasterJenisAlatTangkap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_jenis_alat_tangkap', function (Blueprint $table) {
            $table->increments('id_master_jenis_alat_tangkap');

            $table->string('jenis_alat_tangkap', 150);
            
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
        Schema::drop('master_jenis_alat_tangkap');
    }
}
