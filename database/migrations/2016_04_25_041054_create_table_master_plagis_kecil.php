<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMasterPlagisKecil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_plagis_kecil', function (Blueprint $table) {
            $table->increments('id_master_plagis_kecil');

            $table->integer('id_responden');
            $table->string('plagis_kecil', 150);

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
        Schema::drop('master_plagis_kecil');
    }
}
