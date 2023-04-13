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
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ruang');
            $table->foreign('id_ruang') ->references('id')->on('ruangan')->onDelete('cascade');
            $table->string('nama_barang', 164);
            $table->integer('jumlah_barang');
            $table->longText('deskripsi_barang');
            $table->enum('kondisi_barang', ['layak', 'tidak layak']);
            $table -> text("image_url") -> nullable();
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
        Schema::dropIfExists('barang');
    }
};
