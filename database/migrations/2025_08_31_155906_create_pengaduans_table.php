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
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // siapa yang bikin pengaduan
            $table->string('nik', 16);
            $table->string('nama_lengkap');
            $table->string('nomor_telepon', 15);
            $table->string('email');
            $table->text('alamat');
            $table->date('tanggal');
            $table->text('isi_pengaduan');
            $table->string('bukti_foto')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
};
