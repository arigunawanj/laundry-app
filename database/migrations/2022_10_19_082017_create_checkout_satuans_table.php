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
        Schema::create('checkout_satuans', function (Blueprint $table) {
            $table->id();
            $table->string('kd_invoicesatuan');
            $table->foreignId('paket_satuan_id')->constrained()->onCascadeUpdate()->onCascadeDelete();
            $table->foreignId('user_id')->constrained()->onCascadeUpdate()->onCascadeDelete();
            $table->integer('jumlah_barang');
            $table->string('pay_satuan');
            $table->bigInteger('harga_paketsatuan');
            $table->bigInteger('harga_antarsatuan')->default(0);
            $table->bigInteger('harga_totalsatuan');
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
        Schema::dropIfExists('checkout_satuans');
    }
};
