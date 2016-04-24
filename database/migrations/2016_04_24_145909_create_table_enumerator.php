<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEnumerator extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enumerator', function (Blueprint $table) {
            $table->increments('id_enumerator');
            $table->integer('id_responden');

            $table->string('nama_enumerator', 150);
            $table->timestamp('tanggal_wawancara');
            $table->timestamp('tanggal_editing');
            $table->string('nama_pemvalidasi', 150);

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
        Schema::drop('enumerator');
    }
}
