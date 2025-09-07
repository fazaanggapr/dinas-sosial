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
        Schema::table('pengaduans', function (Blueprint $table) {
            $table->string('nik', 16)->after('id');
            $table->string('nama_lengkap')->after('nik');
            $table->string('nomor_telepon', 15)->after('nama_lengkap');
            $table->string('email')->after('nomor_telepon');
            $table->text('alamat')->after('email');
        });
    }

    public function down(): void
    {
        Schema::table('pengaduans', function (Blueprint $table) {
            $table->dropColumn(['nik', 'nama_lengkap', 'nomor_telepon', 'email', 'alamat']);
        });
    }

};
