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
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('layanan_id')->constrained('layanans')->onDelete('cascade');
            $table->string('nama_pelanggan');
            $table->double('berat_cucian');
            $table->double('total_bayar');
            $table->string('no_hp')->default('089694273720');
            $table->boolean('status_bayar')->default(false);
            $table->boolean('status_ambil')->default(false);
            $table->timestamp('waktu_ambil');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggans');
    }
};
