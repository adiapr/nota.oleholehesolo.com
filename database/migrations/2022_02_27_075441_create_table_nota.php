<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableNota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_nota', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('produk')->nullable();
            $table->string('alamat')->nullable();
            $table->string('keperluan')->nullable();
            $table->string('tagihan')->nullable();
            $table->string('bdt')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('admin')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('jam')->nullable();
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
        Schema::dropIfExists('table_nota');
    }
}
