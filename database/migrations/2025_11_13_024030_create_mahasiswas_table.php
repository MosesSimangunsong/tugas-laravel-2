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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('foto')->nullable(); // Untuk path/nama file foto
            $table->string('nim', 10)->unique();
            $table->string('user_name');
            $table->string('email_akademik')->unique();
            $table->string('program_studi');
            $table->string('kelas');
            $table->string('wali_mahasiswa');
            $table->string('jalur_usm');
            $table->string('status_akhir')->default('Aktif');
            $table->string('angkatan', 4);
            $table->date('tanggal_masuk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
