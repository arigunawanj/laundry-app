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
        Schema::create('checkout_kilos', function (Blueprint $table) {
            $table->id();
            $table->string('kd_invoicekilo');
            $table->foreignId('paket_kilo_id')->constrained()->onCascadeUpdate()->onCascadeDelete();
            $table->integer('berat_barang');
            $table->string('pay_kilo');
            $table->bigInteger('harga_paketkilo');
            $table->bigInteger('harga_antarkilo')->default(0);
            $table->bigInteger('harga_totalkilo');
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
        Schema::dropIfExists('checkout_kilos');
    }
};
