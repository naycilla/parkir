<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableParkir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parkir', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user')->nullable();
            $table->integer('id_tarif');
            $table->string('kode_parkir')->unique();
            $table->string('durasi', 50);
            $table->integer('harga');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('parkir');
    }
}
