<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('denda', function (Blueprint $table) {
            $table->id();
            // Relasi foreign key ke tabel `peminjaman` secara eksplisit
            $table->foreignId('peminjaman_id')->constrained('peminjaman')->onDelete('cascade');
            $table->decimal('amount', 8, 2); // Jumlah denda
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('denda');
    }
};
