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
    Schema::table('umkms', function (Blueprint $table) {
        $table->foreignId('kategori_id')->nullable()->constrained()->onDelete('cascade');
    });
}

public function down(): void
{
    Schema::table('umkms', function (Blueprint $table) {
        $table->dropForeign(['kategori_id']);
        $table->dropColumn('kategori_id');
    });
}

};
