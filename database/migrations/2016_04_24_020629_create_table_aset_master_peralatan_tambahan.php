<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAsetMasterPeralatanTambahan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_peralatan_tambahan', function (Blueprint $table) {
            $table->increments('id_master_peralatan_tambahan');
            $table->string('peralatan_tambahan', 150);

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
        Schema::drop('master_peralatan_tambahan');
    }
}
