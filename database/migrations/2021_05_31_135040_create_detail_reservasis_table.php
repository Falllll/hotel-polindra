<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailReservasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_reservasis', function (Blueprint $table) {
            $table->id();
            $table->integer('kamar_id');
            $table->integer('reservasi_id');
            $table->string('nama_tamu');
            $table->integer('lama_inap');
            $table->string('tanggal');
            $table->integer('jumlah_harga');
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
        Schema::dropIfExists('detail_reservasis');
    }
}
