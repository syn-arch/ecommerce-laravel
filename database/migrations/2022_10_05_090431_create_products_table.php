<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('id_kategori');
            $table->integer('id_subkategori');
            $table->string('nama_barang');
            $table->string('gambar');
            $table->text('deskripsi');
            $table->integer('harga');
            $table->integer('diskon');
            $table->string('bahan');
            $table->string('tags');
            $table->string('sku');
            $table->string('ukuran');
            $table->string('warna');
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
        Schema::dropIfExists('products');
    }
}
