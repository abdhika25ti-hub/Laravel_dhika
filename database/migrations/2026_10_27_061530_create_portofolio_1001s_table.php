<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('portofolio_1001', function (Blueprint $table) {
        $table->id('portofolio_id');
        $table->string('nama');
        $table->text('profil_pribadi');
        $table->string('kontak');
        $table->string('alamat');
        $table->string('keahlian');
        $table->text('riwayat_pendidikan');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portofolio_1001');
    }
};
