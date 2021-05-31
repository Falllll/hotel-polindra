<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('pemesan');
            $table->string('email');
            $table->string('alamat');
            $table->string('kota');
            $table->string('no_hp');
            $table->string('kewarganegaraan');
            $table->string('tipe kamar');
            $table->string('lama_inap');
            $table->integer('jumlah_harga');
            $table->string('room_type');
            $table->string('status');
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
        Schema::dropIfExists('reservations');
    }
}
