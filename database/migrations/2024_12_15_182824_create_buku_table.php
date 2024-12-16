<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id(); // Tipe data unsignedBigInteger secara default
            $table->string('title'); // Judul buku
            $table->unsignedBigInteger('penulis_id'); // Penulis buku
            $table->unsignedBigInteger('penerbit_id')->nullable(); // Penerbit buku
            $table->date('terbit')->nullable();
            $table->text('deskripsi')->nullable(); // Deskripsi buku
            $table->text('sinopsis')->nullable(); // Sinopsis buku
            $table->unsignedBigInteger('genre_id')->nullable(); // Genre buku
            $table->integer('stock')->default(1); // Stok buku
            $table->string('gambar_buku')->nullable();
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('penerbit_id')
                ->references('id')
                ->on('penerbit')
                ->onDelete('cascade');

            $table->foreign('penulis_id')
                ->references('id')
                ->on('penulis')
                ->onDelete('cascade');

            $table->foreign('genre_id')
                ->references('id')
                ->on('genre')
                ->onDelete('cascade');

        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
