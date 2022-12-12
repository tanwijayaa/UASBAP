<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormtampilandepansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formtampilandepans', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Judul')->nullable();
            $table->string('Deskripsi')->nullable();
            $table->string('Tombol')->nullable();
            $table->string('Disable')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('formtampilandepans');
    }
}
