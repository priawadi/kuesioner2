<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMasterJenisAset extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_jenis_aset', function (Blueprint $table) {
            $table->increments('id_master_jenis_aset');
            
            $table->integer('parent_master_jenis_aset');
            $table->string('jenis_aset', 150);
            $table->string('satuan', 30);
            $table->boolean('parent')->default(FALSE);
            
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
        Schema::drop('master_jenis_aset');
    }
}
