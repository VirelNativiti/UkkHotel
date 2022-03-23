<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDkamarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dkamars', function (Blueprint $table) {
            $table->id('id')->unique();
            $table->string('nama_kamar');
            $table->string('tipe_kamar');
            $table->integer('jumlah_kamar');
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
        Schema::dropIfExists('dkamars');
    }
}
