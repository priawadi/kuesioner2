<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMasterBiayaVariabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_biaya_variabel', function (Blueprint $table) {
            $table->increments('id_master_biaya_variabel');
            
            $table->integer('kateg_biaya_variabel');
            $table->string('satuan', 30);
            $table->string('biaya_variabel', 150);


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
        Schema::drop('master_biaya_variabel');
    }
}
