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
        Schema::create('pelapor', function (Blueprint $table) {
            $table->id();
            $table->string('nama');              // Nama pelapor
            $table->string('nik')->unique();     // Nomor Induk Kependudukan (unik)
            $table->string('email')->nullable(); // Email pelapor (opsional)
            $table->string('telepon')->nullable(); // Nomor telepon
            $table->text('alamat');              // Alamat lengkap
            $table->string('jenis_kelamin');     // L/P
            $table->date('tanggal_lahir')->nullable(); // Tanggal lahir (opsional)
            $table->timestamps();    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelapor');
    }
};
