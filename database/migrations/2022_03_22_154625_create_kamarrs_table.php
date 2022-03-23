<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKamarrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kamarr', function (Blueprint $table) {
            $table->id('id')->unique();
            $table->string('nama_pemesan');
            $table->string('email');
            $table->string('no_handphone');
            $table->string('nama_tamu');
            $table->string('tipe_kamar');
            $table->string('tgl_checkin');
            $table->string('tgl_checkout');
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
        Schema::dropIfExists('kamarrs');
    }
}
