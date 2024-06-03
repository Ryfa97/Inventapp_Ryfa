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
        Schema::table('users', function (Blueprint $table) {
            //Menambahkan satu kolom baru setelah kolom email
            $table->enum('role',['kepala','spv', 'admin', 'teknisi', 'user'])->after('email')->default('user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //mengembalikan kolom sebelumnya
            $table->dropColumn('role');
        });
    }
};
