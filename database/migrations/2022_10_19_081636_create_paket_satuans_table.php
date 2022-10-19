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
        Schema::create('paket_satuans', function (Blueprint $table) {
            $table->id();
            $table->string('kd_paketsatuan');
            $table->string('nama_paketsatuan');
            $table->string('ket_paketsatuan')->nullable();
            $table->bigInteger('harga_paketsatuan');
            $table->foreignId('outlet_id')->constrained()->onCascadeUpdate()->onCascadeDelete();
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
        Schema::dropIfExists('paket_satuans');
    }
};
