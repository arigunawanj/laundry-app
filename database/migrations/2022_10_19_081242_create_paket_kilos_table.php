<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_kilos', function (Blueprint $table) {
            $table->id();
            $table->string('kd_paketkilo');
            $table->string('nama_paketkilo');
            $table->bigInteger('harga_paketkilo');
            $table->integer('hari_paketkilo');
            $table->integer('min_berat_paket');
            $table->boolean('antar_jemput_paket')->default(0);
            $table->foreignId('outlet_id')->constrained()->onCascadeDelete()->onCascadeUpdate();
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
        Schema::dropIfExists('paket_kilos');
    }
};
