<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMasterOpsional extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_opsional', function (Blueprint $table) {
            $table->increments('id_master_opsional');
            $table->smallInteger('kateg_master_ops');
            $table->string('opsional_master_ops', 100);
            $table->integer('kode_opsi');

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
        Schema::drop('master_opsional');
    }
}
