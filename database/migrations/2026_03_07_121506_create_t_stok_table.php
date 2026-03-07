<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('t_stok', function (Blueprint $table) {
            $table->id('stok_id'); // This is bigIncrements (unsignedBigInteger)

            // Use unsignedBigInteger to match the parent table's ID type
            $table->unsignedBigInteger('supplier_id');
            $table->unsignedBigInteger('barang_id');
            $table->unsignedBigInteger('user_id');

            $table->datetime('stok_tanggal');
            $table->integer('stok_jumlah');
            $table->timestamps();

            // Add foreign key constraints
            $table->foreign('supplier_id')->references('supplier_id')->on('m_supplier');
            $table->foreign('barang_id')->references('barang_id')->on('m_barang');
            $table->foreign('user_id')->references('user_id')->on('m_user');
        });
    }

    public function down()
    {
        Schema::dropIfExists('t_stok');
    }
};
