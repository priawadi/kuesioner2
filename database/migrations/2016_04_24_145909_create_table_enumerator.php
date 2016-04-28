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

            $table->string('nama_enumerator', 150)->nullable();
            $table->timestamp('tanggal_wawancara')->nullable();
            $table->timestamp('tanggal_editing')->nullable();
            $table->string('nama_pemvalidasi', 150)->nullable();

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
